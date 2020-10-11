<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\AddProduct;

class ProductEditCtrl {
    
    private $idGoods;
    private $groupGoods;
    private $nameParamId;
    private $namesOfParams;
    private $insertedValue;
    private $op;
    private $opId;
    private $producent;
    private $model;

    public function _construct(){
        $this->form = new AddProduct();
    }
    
    public function getParams() {
        $this->insertedValue = ParamUtils::getFromRequest('insertedValue');
        $this->op = ParamUtils::getFromRequest('op');
    }
    
    public function load_id(){
        $this->idGoods = SessionUtils::load("goodsID", $keep = true);
        
        $this->groupGoods = App::getDB()->get("towar","id_grupy_towarow",[
            "idtowar" => $this->idGoods
        ]);
    }
    
    public function action_addParameter(){
        $this->getParams();
        $this->load_id();
        
        $this->opId = App::getDB()->get("nazwa_parametrow","idnazwa_parametrow",[
            "nazwa_parametru" => $this->op
        ]);
        
        App::getDB()->insert("wartosc_parametrow", [
            "id_towar" => $this->idGoods,
            "id_grupy_towarow" => $this->groupGoods,
            "id_nazwa_parametrow" => $this-> opId,
            "wartosc_parametrow" => $this->insertedValue
        ]);
        
        Utils::addInfoMessage("Pomyślnie dodano parametr oraz jego wartość!");
        App::getRouter()->forwardTo('ProductView');
    }
    
    public function action_productEdit(){
        $this->load_id();
        
        $this->producent = App::getDB()->get("towar","producent",[
            "idtowar" => $this->idGoods
        ]);
        
        $this->model = App::getDB()->get("towar","model",[
            "idtowar" => $this->idGoods
        ]);
        
        $this->nameParamId = App::getDB()->select("grupy_towarow_has_nazwa_parametrow", "nazwa_parametrow_idnazwa_parametrow",[
            "grupy_towarow_idgrupy_towarow" => $this->groupGoods
        ]);
        
        $this->namesOfParams = App::getDB()->select("nazwa_parametrow","nazwa_parametru",[
            "idnazwa_parametrow" => $this->nameParamId
        ]);
        
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('page_title', 'Edytuj produkt');
        App::getSmarty()->assign('page_description', 'Naciśnij przycisk, aby przejść do edycji produktu!');
        
        App::getSmarty()->assign('prod', $this->producent);
        App::getSmarty()->assign('mod', $this->model);
        App::getSmarty()->assign('param_names', $this->namesOfParams);
        App::getSmarty()->display('ProductEdit.tpl');
    }

}
