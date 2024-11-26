<?php
require_once 'config/config.php';
require_once 'controlador/AsistenteControlador.php';

// Cargar la vista inicial
$controller = new AsistenteControlador();
$controller->mostrarFormulario();
