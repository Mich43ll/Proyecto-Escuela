<?php

require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
$obj = new alumnosController();
$obj->guardar(
$_POST['NombreCompleto'],
$_POST['Edad'],
$_POST['Genero'],
$_POST['Direccion'],
$_POST['Estado'],
$_POST['idGrado'],




);



?>