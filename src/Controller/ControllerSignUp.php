<?php

require_once 'Controller.php';

if ($controlador->receiveUserData()){
    header('Location: ../View/login.html');
}
else {
    $controlador->displayMessage("The email is already used");
    //header('Location: ../View/register.html');
}

?>