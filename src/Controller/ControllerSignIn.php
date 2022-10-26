<?php

session_start();

require_once 'Controller.php';

if ($controlador->checkUserData()>0){
    $controlador->displayMessage("The current user ID is ".$_SESSION['ID_USER']);
    $controlador->redirect("../View/map/map.html");
}
else {
    $controlador->displayMessage("Email or password incorrect");
    $controlador->redirect("../View/login.html");
}
