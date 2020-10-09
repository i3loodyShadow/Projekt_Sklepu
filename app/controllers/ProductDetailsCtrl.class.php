<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;

class ProductDetailsCtrl {
    
    private $id;
    private $groupGoodsId;
    private $groupGoodsName;
    private $producent;
    private $model;
    
    public function getProductId() {
        $this->id = SessionUtils::load("goodsID");
    }


    public function load_data() {
        $this->getProductId();
        
        $this->groupGoodsId = App::getDB()->get("towar","id_grupy_towarow",[
           "idtowar" => $this->id 
        ]);
        
        $this->groupGoodsName = App::getDB()->get("grupy_towarow", "nazwa_grupy",[
            "idgrupy_towarow" => $this->groupGoodsId
        ]);
        
        $this->producent = App::getDB()->get("towar","producent",[
            "idtowar" => $this->id 
        ]);
        
        $this->model = App::getDB()->get("towar", "model",[
            "idtowar" => $this->id 
        ]);
        
        try {
            $this->records = App::getDB()->select("towar", [
                    "[><]wartosc_parametrow" => ["idtowar" => "id_towar"],
                    "[><]nazwa_parametrow" => ["wartosc_parametrow.id_nazwa_parametrow" => "idnazwa_parametrow"]
                ],[
                    "towar.idtowar",
                    "nazwa_parametrow.nazwa_parametru",
                    "wartosc_parametrow.wartosc_parametrow"
                ],[
                    "towar.idtowar" => $this->id
                ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania danych z bazy!');
            if (App::getConf()->debug){
                Utils::addErrorMessage($e->getMessage());
            }        
        }
    
    }
    
    public function action_productDetails() {
        $this->load_data();
        $this->generateView();
    }
    
    
    public function generateView(){
        App::getSmarty()->assign('page_title','Szczególy produktu');
        App::getSmarty()->assign('page_description','Naciśnij przycisk, aby przejść do szczegółów produktu!');
        
        App::getSmarty()->assign('grTow', $this->groupGoodsName);
        App::getSmarty()->assign('prod', $this->producent);
        App::getSmarty()->assign('mod', $this->model);
        App::getSmarty()->assign('data', $this->records);
        App::getSmarty()->display('ProductDetails.tpl');
        
    }
}
