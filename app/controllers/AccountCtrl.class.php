<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\ParamUtils;
use core\SessionUtils;

class AccountCtrl {
    
    private $userID;
    
    private $oldPass;
    private $newPass;
    private $repeatPass;
    private $passCheck;
    
    private $oldEmail;
    private $newEmail;
    private $repeatEmail;
    private $emailCheck;
    
    public function validatePass(){
        $this->passCheck = ParamUtils::getFromPost('stareHaslo');
        $this->newPass = ParamUtils::getFromPost('noweHaslo');
        $this->repeatPass = ParamUtils::getFromPost('powtHaslo');
        
        $this->oldPass = App::getDB()->get("konto", "haslo",[
            "idkonto" => SessionUtils::load("userID", $keep = true)
        ]);
        
        if($this->oldPass != $this->passCheck){
            Utils::addErrorMessage('Stare hasło nie odpowiada znajdującemu się w bazie danych!');
            return false;
        } else {
        
            $p = new Validator();

            $this->newPass = $p->validateFromPost('noweHaslo', [
                'trim' => true,
                'required' => true,
                'required_message' => 'Podaj hasło',
                'min_length' => 2,
                'max_length' => 15,
                'validator_message' => 'Hasło powinno mieć od 2 do 15 znaków'
            ]);
            
            return !App::getMessages()->isError();
            
            }
            
        if($this->newPass != $this->repeatPass){
            Utils::addErrorMessage('Hasła nie są sobie równe!');
            return false;
        }        
    }
    
    public function validateEmail(){
        $this->emailCheck = ParamUtils::getFromPost('email');
        $this->newEmail = ParamUtils::getFromPost('nowyEmail');
        $this->repeatEmail = ParamUtils::getFromPost('powtEmail');
        
        $this->oldEmail = App::getDB()->get("konto", "email",[
            "idkonto" => SessionUtils::load("userID", $keep = true)
        ]);
        
        if($this->oldEmail != $this->emailCheck){
            Utils::addErrorMessage('Stary e-mail nie odpowiada znajdującemu się w bazie danych!');
            return false;
        } else {
        
            $p = new Validator();

            $this->newEmail = $p->validateFromPost('nowyEmail', [
                'trim' => true,
                'required' => true,
                'required_message' => 'Podaj email',
                'email' => true,
                'validator_message' => 'Błędny Email'
            ]);

            return !App::getMessages()->isError();

            }

        if($this->newEmail != $this->repeatEmail){
            Utils::addErrorMessage('E-maile nie są sobie równe!');
            return false;
        }
    }
    
    public function action_accountEdit() {
        $this->generateView();
    }
    
    public function action_passEdit() {
        if($this->validatePass()){
        
            $id = SessionUtils::load("userID", $keep = true);

            App::getDB()->update("konto",[
                "haslo" => $this->newPass
                ],[
                    "idkonto" => $id
                ]);

            Utils::addInfoMessage('Hasło zostało pomyślnie zmienione');
            $this->generateView();
        } else {
            $this->generateView();
        }
    }
    
    public function action_emailEdit() {
        if($this->validateEmail()){
        
            $this->userID = SessionUtils::load("userID", $keep = true);

            App::getDB()->update("konto",[
                "email" => $this->newEmail
                ],[
                    "idkonto" => $id
                ]);

            Utils::addInfoMessage('E-mail został pomyślnie zmieniony');
            $this->generateView();
        
        } else {
            $this->generateView();
        }
    }
    
    public function generateView(){
        App::getSmarty()->assign('page_title','Ustawienia konta');
        App::getSmarty()->assign('page_description','Proszę nacisnąć przycisk poniżej aby przejść do ustawień konta');
        
        App::getSmarty()->display('AccountEdit.tpl');
    }
}
