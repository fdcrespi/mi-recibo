<?php

include_once 'app/helpers/db.helper.php';

class RecibosModel{
    private $helper;
    private $bbdd;

    function __construct()
    {
        $this->helper = new DBHelper;
        $this->bbdd = $this->helper->connect();
    }

    function getRecibo(){
        return "ok";
    }
}