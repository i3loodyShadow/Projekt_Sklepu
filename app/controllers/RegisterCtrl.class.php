<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\Validator;
use core\ParamUtils;
use app\forms\AccountForm;

class RegisterCtrl {
    private $form;
    private $isUnique;

    public function __construct(){
            $this->form = new AccountForm();
	}
	
	public function validate() { 
            //walidacja
            $this->form->email = ParamUtils::getFromPost('email');
            $this->form->login = ParamUtils::getFromPost('login');
            $this->form->pass = ParamUtils::getFromPost('pass');
        
            $v = new Validator();
            
            $this->form->email = $v->validateFromPost('email', [
                'trim' => true,
                'required' => true,
                'required_message' => 'Podaj email',
                'email' => true,
                'validator_message' => 'Błędny Email'
            ]);
            
            $this->form->login = $v->validateFromPost('login', [
                'trim' => true,
                'required' => true,
                'required_message' => 'Podaj login',
                'min_length' => 2,
                'max_length' => 15,
                'validator_message' => 'Login powinno mieć od 2 do 15 znaków'
            ]);
            
            $this->form->pass = $v->validateFromPost('pass', [
                'trim' => true,
                'required' => true,
                'required_message' => 'Podaj hasło',
                'min_length' => 2,
                'max_length' => 15,
                'validator_message' => 'Hasło powinno mieć od 2 do 15 znaków'
            ]);
            
            $this->isUnique = App::getDB()->select("konto","login",[
                    "login" => $this->form->login
                ]);

                if(!(empty($this->isUnique))){
                    Utils::addErrorMessage('Login jest zajęty, proszę spróbować inny');

                }
                
            return !App::getMessages()->isError();

        }      
        
        public function saveAccount(){
            if ($this->validate()) {
                
            try {
                App::getDB()->insert("konto", [
                        "email" => $this->form->email,
                        "login" => $this->form->login,
                        "haslo" => $this->form->pass,
                        "Rola_idrola" => 2
                ]);
                Utils::addInfoMessage('Pomyślnie zarejestrowano');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        } else {
            $this->generateView();
        }
    }
                    
        public function action_Register() {
            $this->saveAccount();
            $this->generateView();           
        }
        
        public function generateView(){
            App::getSmarty()->assign('page_title','Strona rejestracji');
            App::getSmarty()->assign('page_description','Click button below to go to log in.');
            App::getSmarty()->assign('form',$this->form);
            App::getSmarty()->display('RegisterView.tpl');	
	}

        
}
