<?php

require_once("C://xampp/htdocs/Escuela/controller/clasesController.php");
$obj = new clasescontroller();
$obj->guardar(
$_POST['NombreClase'],
$_POST['Estado'],
$_POST['FK_IdEmpleado'],
);
?>