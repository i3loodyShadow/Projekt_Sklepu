<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\ProductSF;

class ProcessorCtrl {
    
    private $form;
    private $records;
    private $names;
    
    public function __construct() {
        $this->form = new ProductSF();
    }
    
    public function validate() {
        $this->form->product = ParamUtils::getFromRequest('productSF');
        
        return !App::getMessages()->isError();
    }
    
    public function load_data(){
        if(RoleUtils::inRole('admin')){
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

            try {
                $this->records = App::getDB()->select("towar", [
                        "[><]wartosc_parametrow" => ["idtowar" => "id_towar"],
                        "[><]nazwa_parametrow" => ["wartosc_parametrow.id_nazwa_parametrow" => "idnazwa_parametrow"]
                    ],[
                    "towar.idtowar",
                    "nazwa_parametrow.nazwa_parametru",
                    "wartosc_parametrow.wartosc_parametrow"
                    ],$where);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania danych z bazy!');
                if (App::getConf()->debug){
                    Utils::addErrorMessage($e->getMessage());
                }

            }
        }
    }  
        
    public function action_ProcessorView() {
            $this->load_data();
            $this->assignView();

            App::getSmarty()->display('ProcessorView.tpl');       
    }
        
    public function action_ProcessorPartView(){
            $this->load_data();
            $this->assignView();

            App::getSmarty()->display('ProcessorPartView.tpl');
    }
    
    public function assignView(){
        $this->validate();
        App::getSmarty()->assign('page_title','Nasze procesory');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do oferty procesorów!');
        
        App::getSmarty()->assign('product', $this->form);
        App::getSmarty()->assign('data', $this->records);
        App::getSmarty()->assign('names', $this->names);
        
        }
}
