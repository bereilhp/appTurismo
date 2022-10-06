<?php

require_once 'controller.php';

$controlador->receiveUserData();

header('Location: ../vista/login.html');

?>