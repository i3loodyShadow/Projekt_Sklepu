<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ExpenseForm;

class ShoppingCartCtrl {
    
    private $records;
    private $id;
    private $userID;
    private $idZamowienie;
    private $cenaZamowienia;
    private $cenaKoszyka;

    
    public function __construct(){
        $this->cenaKoszyka = new ExpenseForm();                 
    }
    
    public function load_data() {
        
        $this->userID = SessionUtils::load("userID", $keep = true);
        
        $this->idZamowienie = App::getDB()->min("zamowienie", "idzamowienie",[
            "konto_idkonto" => $this->userID
        ]);
        
        if($this->idZamowienie == ''){
            Utils::addWarningMessage('Twój koszyk jest pusty');
        }
        
        try {
            $this->records = App::getDB()->select("towar_zamowienia", [
                "idtowar_zamowienia",
                "producent",
                "model",
                "cena"
                    ], [
                       "zamowienie_idzamowienie" => $this->idZamowienie
                    ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        
        $this->cenaZamowienia = App::getDB()->sum("towar_zamowienia", "cena",[
           "zamowienie_idzamowienie" => $this->idZamowienie 
        ]);
        
        App::getDB()->update("zamowienie", [
            "koszt" => $this->cenaZamowienia
        ],[
            "konto_idkonto" => $this->userID
        ]);
        
        $this->cenaKoszyka->cenaKoszyka = App::getDB()->get("zamowienie", "koszt",[
            "konto_idkonto" => $this->userID
        ]); 
    }
   
    public function validateEdit() {
        $this->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_deleteFromSC() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("towar_zamowienia",[
                    "idtowar_zamowienia" => $this->id
                ] );

                App::getDB()->delete("zamowienie", [
                    "idzamowienie" => $this->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto produkt z koszyka');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('ShoppingCartView');
    }
    
    public function action_ShoppingCartView() {
            $this->load_data();
            $this->generateView();
    }
    
    public function generateView() {
        App::getSmarty()->assign('page_title','Koszyk zakupowy');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do koszyka!');
        
        App::getSmarty()->assign('data', $this->records);
        App::getSmarty()->assign('expense',$this->cenaKoszyka);
        
        App::getSmarty()->display('ShoppingCartView.tpl');
    }
}
