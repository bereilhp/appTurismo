<?php

require_once 'Controller.php';

//$controlador->checkUserData(); 

if ($controlador->checkUserData()){
    header('Location: ../View/map/map.html');
}
else {
    $controlador->displayMessage("User not registered");
    //header('Location: ../View/login.html');
}
