<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;

class NavigateCtrl {
           
    public function action_backFromService(){
        Utils::addInfoMessage('Witamy ponownie w naszym sklepie!');
        $this->generateText();
    }

    public function action_NavigateShow(){
        Utils::addInfoMessage('Witamy w naszym sklepie!');
        $this->generateText();
    }

    public function action_NavigateLogIn(){
        Utils::addInfoMessage('Witamy po zalogowaniu!');
        $this->generateText();
    }

    public function action_NavigateLogOut() {
        Utils::addInfoMessage('Do zobaczenia!');
        $this->generateText();  
    }

    public function generateText(){		
        App::getSmarty()->assign('page_title','Twoje części komputerowe');
        App::getSmarty()->assign('page_description','Proszę nacisnąć przycisk poniżej aby przejść do wyboru komponentów');
        
        App::getSmarty()->display('NavigateView.tpl');
    }
}