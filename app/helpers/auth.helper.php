<?php
class AuthHelper {

    public function __construct() {

        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

  
    //verifica login
    function checkLogged() {
        
        if (!isset($_SESSION['ID_USER'])) {
            header("Location: " . BASE_URL . "login");
            die();
        }
        else{
            return $typeuser = [($_SESSION['ADMIN']),($_SESSION['ID_USER'])];
        }
    }

  
    //Cierra la sesion
    function logout() {
      
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    }

  
    function login($user){

        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USER_NAME'] = $user->user_name;
        $_SESSION['ADMIN'] = $user->admin;
    }
}