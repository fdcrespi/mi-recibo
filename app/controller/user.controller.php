<?php

include_once 'app/view/UserView.php';
include_once 'app/model/recibos.model.php';

Class UserController{
    private $view;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->model = new RecibosModel();
    }

    function login(){
        $recibo = $this->model->getRecibo();
        $this->view->showLogin($recibo);
    }
}