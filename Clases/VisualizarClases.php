<?php

require_once("C://xampp/htdocs/Escuela/controller/clasesController.php");
$obj = new empleadosController();
$obj->guardar(
$_POST['NombreCompleto'],
$_POST['Id_Clase'],
$_POST['NombreClase'],
$_POST['Estado'],
$_POST['FK_IdEmpledao'],
);
?>