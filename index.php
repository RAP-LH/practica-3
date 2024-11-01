<?php

$config = require __DIR__ . '/config.php';
require __DIR__ . '/controllers/UsuarioController.php';

$controller = new UsuarioController($config);
$controller->handleRequest();
?>