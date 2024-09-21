<?php

// // session_start();

include_once "utils/defaults.php";
include_once "config/site.php";
// // include_once "models/DB.php";
// // include_once "models/Main.php";


$controller = ucfirst($_GET['controller']);

if(!file_exists("./controllers/".$controller."Controller.php")){
    $controller = "error";
}

$action = $_GET['action'];
$id = $_GET['id'];

if (empty($action))
    $action = "home";

$ctrlName = ucfirst($controller) . "Controller";

include "controllers/$ctrlName.php";
$ctrl = new $ctrlName;

$ctrl->{$action}($id);

?>