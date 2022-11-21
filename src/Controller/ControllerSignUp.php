<?php

session_start();

require_once 'Controller.php';

if ($controlador->receiveUserData()){
    $controlador->displayMessage("Your registration was successful!");
    $controlador->redirect("../View/login.html");
    //header('Location: ../View/login.html');
}
else {
    if($_SESSION['ERROR_NAME']!=""){
        $controlador->displayMessage($_SESSION['ERROR_NAME']);
    }
    if($_SESSION['ERROR_SURNAME']!=""){
        $controlador->displayMessage($_SESSION['ERROR_SURNAME']);
    }
    if($_SESSION['ERROR_EMAIL']!=""){
        $controlador->displayMessage($_SESSION['ERROR_EMAIL']);
    }
    if($_SESSION['ERROR_DUPLICATE']!=""){
        $controlador->displayMessage($_SESSION['ERROR_DUPLICATE']);
    }
    $controlador->setWrongInput(array(ucwords(strtolower($_POST["name"])), ucwords(strtolower($_POST["surname"])), strtolower($_POST["email"])));
    $_SESSION["WRONG_INPUT"] = $controlador->getWrongInput();
    //var_dump($controlador->getWrongInput());
    $controlador->redirect('../View/register.php');
    //$controlador->redirect('../View/register.php?array='.$_SESSION["WRONG_INPUT"][0]);
}

?>