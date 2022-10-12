<?php

require_once 'Controller.php';

$controlador->receiveUserData();

header('Location: ../View/login.html')

//if ($controlador->receiveUserData())header('Location: ../View/login.html');
//else ("El correo no es válido, ya que lo está utilizando otro usuario");

?>