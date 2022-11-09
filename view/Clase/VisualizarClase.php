<?php

require_once("C://wamp64/www/Escuela/controller/clasescontroller.php");
$obj = new clasesController();
$obj->guardar(
$_POST['NombreClase'],
$_POST['Estado'],
$_POST['idEmpleado'],



);



?>