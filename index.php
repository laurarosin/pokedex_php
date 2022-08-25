<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/NomeController.php';

switch($uri_parse)

{

    case '/home':
        include 'View/Pagina_Inicial/home.php';
    break;

    case '/nome':
    NomeController::index();
    break;
    
    case '/nome/form':
        NomeController::form();
    break;

    case '/nome/save':
        NomeController::save();
    break; 
    
    case '/nome/delete':
        NomeController::delete();
    break; 

}