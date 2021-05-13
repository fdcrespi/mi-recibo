<?php

include_once './libs/smarty/libs/Smarty.class.php';

class UserView{

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showLogin($recibo){
        $this->smarty->assign('recibo', $recibo);
        $this->smarty->display('./templates/main.tpl');
    }
}