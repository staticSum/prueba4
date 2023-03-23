<?php

//inlcuir los controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/alumnos.controlador.php";
require_once "controladores/usuarios.controlador.php";

//incluir los modelos
require_once "modelos/usuarios.modelo.php";
require_once "modelos/alumnos.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
