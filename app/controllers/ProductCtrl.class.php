<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ProductSF;

class ProductCtrl {
     
    private $form;
    private $records;
    private $names;
    private $Userid;
    private $id;

    public function __construct() {
        $this->form = new ProductSF();
    }
    
    public function validate() {

        $this->form->product = ParamUtils::getFromRequest('productSF');
        
        return !App::getMessages()->isError();
    }
    
    public function load_data(){
       
        $this->validate();

        $search = [];
        if (isset($this->form->product) && strlen($this->form->product) > 0) {
            $search['model[~]'] = '%' . $this->form->product . '%';
        }
        
        $num_params = sizeof($search);
        if ($num_params > 1) {
            $where = ["AND" => &$search];
        } else {
            $where = &$search;
        }
        $where ["ORDER"] = "idtowar" AND "nazwa_parametrow";
        
        try {
            $this->names = App::getDB()->select("towar", [
                "idtowar",
                "producent",
                "model"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        
    }
    
    public function action_addToShoppingCart(){
        if(RoleUtils::inRole('user')){
            if($this->validateEdit()){
                try {
                    
                    $this->Userid = SessionUtils::load("userID", $keep = true);
                    
                    $cena = App::getDB()->get('wartosc_parametrow','wartosc_parametrow',[
                        "id_towar" => $this->id,
                        "id_nazwa_parametrow" => 3
                    ]);

                    App::getDB()->insert('zamowienie', [
                        "status" => 1,
                        "koszt" => $cena,
                        "konto_idkonto" => $this->Userid,
                        "konto_Rola_idrola" => 2
                    ]);

                    $id_zamowienie = App::getDB()->get('zamowienie', 'idzamowienie',[
                        "konto_idkonto" => $this->Userid
                    ]);

                    $producent = App::getDB()->get('towar', 'producent',[
                        "idtowar" => $this->id
                    ]);

                    $model = App::getDB()->get('towar', 'model',[
                        "idtowar" => $this->id
                    ]);

                    App::getDB()->insert('towar_zamowienia', [
                        "zamowienie_idzamowienie" => $id_zamowienie,
                        "producent" => $producent,
                        "model" => $model,
                        "cena" => $cena
                    ]);
                } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
                }
                
                Utils::addInfoMessage('Pomyślnie dodano do koszyka');
                App::getRouter()->forwardTo('ProductView');
            }
            
            
        } else {
            Utils::addWarningMessage('Tylko osoba zalogowana może korzystać z koszyka');
            App::getRouter()->redirectTo('Register');
        }
        
    }   
    
    public function validateEdit() {
        $this->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_productDelete() {
        if(RoleUtils::inRole('admin')){
            if ($this->validateEdit()) {
                    
                try {
                    $toDelete = App::getDB()->get("towar", "model",[
                        "idtowar" => $this->id
                    ]);
                    
                    if(App::getDB()->has("towar_zamowienia", [
                        "model" => $toDelete
                    ])){
                    
                    App::getDB()->delete("towar_zamowienia",[
                        "model" => $toDelete
                    ]);
                    }
                    
                    App::getDB()->delete("wartosc_parametrow",[
                        "id_towar" => $this->id
                    ] );

                    App::getDB()->delete("towar", [
                        "idtowar" => $this->id
                    ]);
                    Utils::addInfoMessage('Pomyślnie usunięto rekord');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->forwardTo('ProductView');
        }
    }
    
    public function action_ProductEdition(){
        if($this->validateEdit()){
            $goodsID = $this->id;
            SessionUtils::store("goodsID", $goodsID);

            App::getRouter()->forwardTo('productEdit');
        }
    }
    
    public function action_ProductDetails(){
        if($this->validateEdit()){
            $goodsID = $this->id;
            SessionUtils::store("goodsID", $goodsID);
            
            App::getRouter()->forwardTo('productDetails');
        }    
    }
      
    public function action_NewProduct(){
        App::getSmarty()->display('AddProduct.tpl');
    }
        
    public function action_ProductView() {
        $this->load_data();
        $this->assignView();
            
        App::getSmarty()->display('ProductsView.tpl');
    }
        
    public function action_ProductPartView(){
        $this->load_data();
        $this->assignView();
            
        App::getSmarty()->display('ProductsPartView.tpl');
    }
    
    public function assignView(){
        $this->validate();
        App::getSmarty()->assign('page_title','Nasze produkty');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do oferty produktów!');
        
        App::getSmarty()->assign('product', $this->form);
        App::getSmarty()->assign('data', $this->records);
        App::getSmarty()->assign('names', $this->names);
        
        }
}
