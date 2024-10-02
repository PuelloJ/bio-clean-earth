<?php

include_once("controller/controlador_" . $controlador . ".php");

$objControlador = "Controlador" . ucfirst($controlador);
$controlador = new $objControlador();
$controlador->$accion();
