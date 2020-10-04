<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\Validator;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\AddMoBo;

class MoBoEditCtrl {
    
    private $form;
    private $max;
    
    public function __construct() {
        
        $this->form = new AddMoBo();
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
            'max_length' => 15,
            'validator_message' => 'Nazwa modelu powinna mieć od 2 do 15 znaków'
        ]);
        
        $this->form->usb_3_0 = $v->validateFromPost('usb_3_0',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj czy ma usb 3.0',
            'min_length' => 3,
            'max_length' => 3,
            'validator_message' => 'Poprawna odpowiedź to tak lub nie'
        ]);
        
        $this->form->gniazdo_m_2 = $v->validateFromPost('gniazdo_m_2',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj czy ma złącze M2',
            'min_length' => 3,
            'max_length' => 3,
            'validator_message' => 'Poprawna odpowiedź to tak lub nie'
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
        $this->form->id = SessionUtils::load("id_tow");
        return !App::getMessages()->isError();
    }
    
    public function action_NewMoBo() {
        if(RoleUtils::inRole('admin')){
            $this->generateView();
        }
    }
    public function action_MoBoEdit() {
        if(RoleUtils::inRole('admin')){
            if ($this->validateEdit()) {
                try {
                    $record = App::getDB()->get("towar", "*", [
                        "idtowar" => $this->form->id
                    ]);
                        $this->form->id = $record['idtowar'];
                        $this->form->producent = $record['producent'];
                        $this->form->model = $record['model'];

                    $usb = App::getDB()->get("wartosc_parametrow","*", [
                        "id_towar" => $this->form->id,
                        "id_nazwa_parametrow" => 6
                    ]);    

                    $m2 = App::getDB()->get("wartosc_parametrow","*", [
                        "id_towar" => $this->form->id,
                        "id_nazwa_parametrow" => 7
                    ]);

                    $cena = App::getDB()->get("wartosc_parametrow","*", [
                        "id_towar" => $this->form->id,
                        "id_nazwa_parametrow" => 3
                    ]);
                        $this->form->usb_3_0 = $usb['wartosc_parametrow'];
                        $this->form->gniazdo_m_2 = $m2['wartosc_parametrow'];
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
   
    public function action_MoBoSave() {
        if(RoleUtils::inRole('admin')){
            if ($this->validateSave()) {
                try {
                    if(empty($this->form->id)){
                        
                        $count = App::getDB()->count("towar");
                        if ($count <= 25) {
                            //dodawanie    
                            App::getDB()->insert("towar", [
                                "id_grupy_towarow" => 3,
                                "producent" => $this->form->producent,
                                "model" => $this->form->model,
                            ]);

                            $this->max = App::getDB()->max("towar","idtowar");

                            App::getDB()->insert("wartosc_parametrow",[
                                "id_towar" => $this->max,
                                "id_grupy_towarow" => 3,
                                "id_nazwa_parametrow" => 6,
                                "wartosc_parametrow" => $this->form->usb_3_0
                            ]);

                            App::getDB()->insert("wartosc_parametrow",[
                                "id_towar" => $this->max,
                                "id_grupy_towarow" => 3,
                                "id_nazwa_parametrow" => 7,
                                "wartosc_parametrow" => $this->form->gniazdo_m_2
                            ]);

                            App::getDB()->insert("wartosc_parametrow",[
                                "id_towar" => $this->max,
                                "id_grupy_towarow" => 3,
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
                            "wartosc_parametrow" => $this->form->usb_3_0
                                ], [
                            "id_towar" => $this->form->id,
                            "id_grupy_towarow" => 3,
                            "id_nazwa_parametrow" => 6

                        ]);

                        App::getDB()->update("wartosc_parametrow",[
                            "wartosc_parametrow" => $this->form->gniazdo_m_2
                                ], [
                            "id_towar" => $this->form->id,
                            "id_grupy_towarow" => 3,
                            "id_nazwa_parametrow" => 7        
                        ]);

                        App::getDB()->update("wartosc_parametrow",[
                            "wartosc_parametrow" => $this->form->cena
                                ], [
                            "id_towar" => $this->form->id,
                            "id_grupy_towarow" => 3,
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
        App::getSmarty()->assign('page_title', 'Dodaj płytę główną');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do dodania karty graficznej!');
        
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('AddMoBo.tpl');
    } 
}
