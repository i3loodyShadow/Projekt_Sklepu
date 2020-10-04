<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\Validator;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\AddProcessor;

class ProcessorEditCtrl {
    
    private $form;
    private $max;
    
    public function __construct() {
        
        $this->form = new AddProcessor();
    }

    public function validateSave() {
        
        $this->form->id = ParamUtils::getFromPost('id', true, 'Błędne wywołanie aplikacji');
        
        $v = new Validator();
        
        $this->form->producent = $v->validateFromPost('producent',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj producenta',
            'min_length' => 2,
            'max_length' => 10,
            'validator_message' => 'Nazwa producenta powinna mieć od 2 do 10 znaków'
        ]);
        
        $this->form->model = $v->validateFromPost('model',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj model',
            'min_length' => 2,
            'max_length' => 10,
            'validator_message' => 'Nazwa modelu powinna mieć od 2 do 10 znaków'
        ]);
        
        $this->form->taktowanie = $v->validateFromPost('taktowanie',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj taktowanie',
            'min_length' => 2,
            'max_length' => 7,
            'validator_message' => 'Taktowanie powino mieć od 2 do 7 znaków'
        ]);
        
        $this->form->lRdzeni = $v->validateFromPost('lRdzeni',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj liczbę rdzeni',
            'min_length' => 1,
            'max_length' => 2,
            'validator_message' => 'Liczba rdzeni powinna mieć od 1 do 2 znaków'
        ]);
        
        $this->form->cena = $v->validateFromPost('cena',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj cenę',
            'min_length' => 2,
            'max_length' => 10,
            'validator_message' => 'Cena powinna mieć od 2 do 10 znaków'
        ]);
        
        return !App::getMessages()->isError();
    }   
    
    public function validateEdit() {
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    
    public function action_NewProcessor() {
        if(RoleUtils::inRole('admin')){
            $this->generateView();
        }
    }
    public function action_processorEdit() {
        if(RoleUtils::inRole('admin')){
            if ($this->validateEdit()){
                try {
                    $record = App::getDB()->get("towar", "*", [
                        "idtowar" => $this->form->id
                    ]);
                        $this->form->id = $record['idtowar'];
                        $this->form->producent = $record['producent'];
                        $this->form->model = $record['model'];

                    $takt = App::getDB()->get("wartosc_parametrow","*", [
                        "id_towar" => $this->form->id,
                        "id_nazwa_parametrow" => 1
                    ]);    

                    $lRdzeni = App::getDB()->get("wartosc_parametrow","*", [
                        "id_towar" => $this->form->id,
                        "id_nazwa_parametrow" => 2
                    ]);

                    $cena = App::getDB()->get("wartosc_parametrow","*", [
                        "id_towar" => $this->form->id,
                        "id_nazwa_parametrow" => 3
                    ]);
                        $this->form->taktowanie = $takt['wartosc_parametrow'];
                        $this->form->lRdzeni = $lRdzeni['wartosc_parametrow'];
                        $this->form->cena = $cena['wartosc_parametrow'];
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
            }
            $this->generateView();
        }
    }
    
    public function action_processorSave() {
        if(RoleUtils::inRole('admin')){
            if ($this->validateSave()) {
                try {
                    if(empty($this->form->id)){
                        
                        $count = App::getDB()->count("towar");
                        if ($count <= 25) {
                            //dodawanie    
                            App::getDB()->insert("towar", [
                                "id_grupy_towarow" => 1,
                                "producent" => $this->form->producent,
                                "model" => $this->form->model,
                            ]);

                            $this->max = App::getDB()->max("towar","idtowar");

                            App::getDB()->insert("wartosc_parametrow",[
                                "id_towar" => $this->max,
                                "id_grupy_towarow" => 1,
                                "id_nazwa_parametrow" => 1,
                                "wartosc_parametrow" => $this->form->taktowanie
                            ]);

                            App::getDB()->insert("wartosc_parametrow",[
                                "id_towar" => $this->max,
                                "id_grupy_towarow" => 1,
                                "id_nazwa_parametrow" => 2,
                                "wartosc_parametrow" => $this->form->lRdzeni
                            ]);

                            App::getDB()->insert("wartosc_parametrow",[
                                "id_towar" => $this->max,
                                "id_grupy_towarow" => 1,
                                "id_nazwa_parametrow" => 3,
                                "wartosc_parametrow" => $this->form->cena
                            ]);

                            Utils::addInfoMessage('Pomyślnie zapisano produkt');
                            
                        } else {

                            Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                            $this->generateView();
                            exit();
                        }
                        
                    //aktualizacja
                    } else {
                        App::getDB()->update("towar", [
                            "producent" => $this->form->producent,
                            "model" => $this->form->model,
                                ], [
                            "idtowar" => $this->form->id
                        ]); 

                        App::getDB()->update("wartosc_parametrow",[
                            "wartosc_parametrow" => $this->form->taktowanie
                                ], [
                            "id_towar" => $this->form->id,
                            "id_grupy_towarow" => 1,
                            "id_nazwa_parametrow" => 1

                        ]);

                        App::getDB()->update("wartosc_parametrow",[
                            "wartosc_parametrow" => $this->form->lRdzeni
                                ], [
                            "id_towar" => $this->form->id,
                            "id_grupy_towarow" => 1,
                            "id_nazwa_parametrow" => 2        
                        ]);

                        App::getDB()->update("wartosc_parametrow",[
                            "wartosc_parametrow" => $this->form->cena
                                ], [
                            "id_towar" => $this->form->id,
                            "id_grupy_towarow" => 1,
                            "id_nazwa_parametrow" => 3    
                        ]);                    
                        Utils::addInfoMessage('Pomyślnie zaaktualizowano produkt');

                    }    
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }

                App::getRouter()->forwardTo('ProductView');
            } else {
                $this->generateView();
            }
        }
    }
    
    public function generateView(){
        App::getSmarty()->assign('page_title', 'Dodaj procesor');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do dodania procesora!');
        
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('AddProcessor.tpl');
    }
}


