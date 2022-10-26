<?php

session_start();

require_once 'Controller.php';

//$controlador->checkUserData();

$id_user=$controlador->checkUserData();

if ($id_user>0){
    $controlador->displayMessage($_SESSION['ID_USER']);
    //header('Location: ../View/map/map.html');
}
else {
    $controlador->displayMessage("User not registered");
    //header('Location: ../View/login.html');
}
