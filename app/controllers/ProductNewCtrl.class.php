<?php


namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\Validator;
use core\ParamUtils;
use app\forms\AddProduct;

class ProductNewCtrl {
    
    private $group_names_id;
    
    public function __construct() {
        
        $this->form = new AddProduct();
    }
    
    public function getParams(){
        $this->form->id = ParamUtils::getFromPost('id', true, 'Błędne wywołanie aplikacji');
        $this->form->op = ParamUtils::getFromRequest('op', true, 'Błędne wywołanie aplikacji');
    }

    public function validateSave(){
        
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
 
        return !App::getMessages()->isError();
    }
    
    public function action_ProductSave() {
        if(RoleUtils::inRole('admin')){
            $this->getParams();
                if ($this->validateSave()) {
                    try {

                            $count = App::getDB()->count("towar");
                            if ($count <= 25) {
                                //dodawanie
                                $this->group_names_id = App::getDB()->get("grupy_towarow","idgrupy_towarow",[
                                    "nazwa_grupy" => $this->form->op 
                                ]);
                                
                                App::getDB()->insert("towar", [
                                    "id_grupy_towarow" => $this->group_names_id,
                                    "producent" => $this->form->producent,
                                    "model" => $this->form->model,
                                ]);

                                Utils::addInfoMessage('Pomyślnie zapisano produkt');

                            } else {

                                Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                                $this->generateView();
                                exit();
                            }   
                    } catch (\PDOException $e) {
                        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                        if (App::getConf()->debug)
                            Utils::addErrorMessage($e->getMessage());
                    }

                    App::getRouter()->forwardTo('NewProduct');
                } else {
                    $this->generateView();
                }
        }                
    }
    
    public function action_NewProduct(){
        $this->form->op = App::getDB()->select("grupy_towarow","nazwa_grupy");       
        $this->generateView();
    }
    
    public function generateView(){
        App::getSmarty()->assign('page_title','Dodaj produkt');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do dodawania produktów!');  
        
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('group_names', $this->form->op);
        App::getSmarty()->display('AddProduct.tpl');
    }
}
