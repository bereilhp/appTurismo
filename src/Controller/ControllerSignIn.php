<?php

require_once 'Controller.php';

$controlador->checkUserData(); 

if ($controlador->checkUserData()) header('Location: ../View/map/map.html');
else echo "Usuario no registrado";
