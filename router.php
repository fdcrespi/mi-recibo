<?php   

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

   /* Incluyo la libreria para el ruteo */
   include_once 'libs/Router.php';
   include_once 'app/controller/user.controller.php';
   
   /* creo el ruteo */
   $router = new Router();

   /* Creando la tabla de ruteo */
   $router->setDefaultRoute('UserController' , 'login');

   /* rutea -> obteniendo el RECURSO y el METODO por el que me llamaron */
   $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);

