<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\AccountForm;

class LoginCtrl{
	private $form;
        private $id;

        public function __construct(){
            $this->form = new AccountForm();
	}
	
	public function validate() { 
            //walidacja
            $this->form->login = ParamUtils::getFromPost('login');
            $this->form->pass = ParamUtils::getFromPost('pass');

            if (!isset($this->form->login))
                return false;

            if (empty($this->form->login)) {
                Utils::addErrorMessage('Login nie może być pusty!');
            }
            if (empty($this->form->pass)) {
                Utils::addErrorMessage('Hasło nie może być puste!');
            }

            if (App::getMessages()->isError())
                return false;
        
            //logowanie
            if (App::getDB()->has("konto",[
                "AND" => [
                    "login" => $this->form->login
                ],
                "haslo" => $this->form->pass,
            ])){
                
                if(App::getDB()->has("konto",[
                    "AND" => [
                        "AND" => [
                            "login" => $this->form->login
                        ],
                        "haslo" => $this->form->pass
                    ],
                    "Rola_idrola" => 1
                ])){
                    RoleUtils::addRole('admin');
                    App::getRouter()->forwardTo('AdminView');
                }else{
                    RoleUtils::addRole('user');
                    
                    $this->id = App::getDB()->get('konto', 'idkonto',[
                        "login" => $this->form->login,
                        "haslo" => $this->form->pass
                    ]);
                    SessionUtils::store("userID", $this->id);
                    
                    App::getRouter()->forwardTo('NavigateLogIn');
                }
                    
            }else{
                Utils::addErrorMessage('Błędny login lub hasło!');   
            }
            
            return !App::getMessages()->isError();
        }   
	
	public function action_Login() {
            if ($this->validate()) {
            } else {
                $this->generateView();
            } 
        }
	
	public function action_Logout(){
		session_destroy();

                App::getRouter()->redirectTo('NavigateLogOut');
		$this->generateView();	 
	}
	
	public function generateView(){
		
		App::getSmarty()->assign('page_title','Strona logowania');
                App::getSmarty()->assign('page_description','Naciśnij przycisk poniżej aby przewinąć do logowania');
		App::getSmarty()->assign('form',$this->form);
		App::getSmarty()->display('LoginView.tpl');		
	}
}