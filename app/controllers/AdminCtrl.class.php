<?php

namespace app\controllers;

use core\App;
use core\Utils;

class AdminCtrl {   
    
    public function action_AdminView(){
            Utils::addInfoMessage('Jesteś adminem');
            $this->generateText();
            App::getSmarty()->display('AdminView.tpl');
    }

    public function action_backToAdminNavigator(){
            Utils::addInfoMessage('Witaj ponownie adminie');
            $this->generateText();
            App::getSmarty()->display('AdminView.tpl');
    }
    
    public function generateText() {
        App::getSmarty()->assign('page_title','Opcje administratora');
        App::getSmarty()->assign('page_description','Proszę nacisnąć przycisk poniżej aby przejść do opcji administratora');
        
        App::getSmarty()->assign('form',$this->form);
    }
    
}
