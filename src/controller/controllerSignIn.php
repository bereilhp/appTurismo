<?php

require_once 'controller.php';

$controlador->checkUserData(); 

if ($controlador->checkUserData()) header('Location: ../vista/map/map.html');
else echo "Usuario no registrado";
