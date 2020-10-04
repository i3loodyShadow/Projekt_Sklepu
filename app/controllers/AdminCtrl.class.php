<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\AccountSF;

class AdminCtrl {
    
    private $accountID;
    private $names;
    
    public function __construct() {
        $this->form = new AccountSF();
    }
    
    public function validate() {

        $this->form->email = ParamUtils::getFromRequest('emailSF');
        
        return !App::getMessages()->isError();
    }
    
    public function load_data(){
       
        $this->validate();

        $search = [];
        if (isset($this->form->email) && strlen($this->form->email) > 0) {
            $search['email[~]'] = '%' . $this->form->email . '%';
        }
        
        $num_params = sizeof($search);
        if ($num_params > 1) {
            $where = ["AND" => &$search];
        } else {
            $where = &$search;
        }
        $where ["ORDER"] = "idkonto";
        
        try {
            $this->names = App::getDB()->select("konto", [
                "idkonto",
                "login",
                "haslo",
                "email"
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }         
    }   
    
    public function validateEdit() {
        $this->accountID = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_accountDelete() {
        if(RoleUtils::inRole('admin')){
            if ($this->validateEdit()) {
                    
                try {
                    $toDelete = App::getDB()->get("zamowienie", "idzamowienie",[
                        "konto_idkonto" => $this->accountID
                    ]);
                    
                    if(App::getDB()->has("towar_zamowienia", [
                        "zamowienie_idzamowienie" => $toDelete
                    ])){
                    
                    App::getDB()->delete("towar_zamowienia",[
                        "zamowienie_idzamowienie" => $toDelete
                    ]);
                    
                    App::getDB()->delete("zamowienie",[
                        "konto_idkonto" => $this->accountID
                    ]);
                    }

                    App::getDB()->delete("konto", [
                        "idkonto" => $this->accountID
                    ]);
                    Utils::addInfoMessage('Pomyślnie usunięto konto');
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
            }
            App::getRouter()->forwardTo('usersAccountsView');
        }
    }    
    
    public function action_usersAccountsView(){
        $this->load_data();
        $this->generateUsersAccountView();
        App::getSmarty()->display('UsersView.tpl');
    }
    
    public function action_usersAccountsPartView(){
        $this->load_data();
        $this->generateUsersAccountView();
        App::getSmarty()->display('UsersPartView.tpl');
    }
    
    public function action_AdminView(){
        Utils::addInfoMessage('Jesteś adminem');
        $this->generateView();      
    }

    public function action_backToAdminNavigator(){
        Utils::addInfoMessage('Witaj ponownie adminie');
        $this->generateView();
    }
    
    public function generateView() {
        App::getSmarty()->assign('page_title','Opcje administratora');
        App::getSmarty()->assign('page_description','Proszę nacisnąć przycisk poniżej aby przejść do opcji administratora');
        
        App::getSmarty()->assign('form',$this->form);
        App::getSmarty()->display('AdminView.tpl');
    }
    
    public function generateUsersAccountView(){
        App::getSmarty()->assign('page_title','Zarządzanie kontami');
        App::getSmarty()->assign('page_description','Proszę nacisnąć przycisk poniżej aby przejść do zarządzania kontami');
        
        App::getSmarty()->assign('names', $this->names);
        App::getSmarty()->assign('form',$this->form);        
    }   
}
