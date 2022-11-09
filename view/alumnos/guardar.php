<?php

require_once("C://wamp64/www/Escuela/controller/alumnosController.php");
$obj = new alumnosController();
$obj->guardar(
    $_POST['NombreCompleto'],
    $_POST['Direccion'],
    $_POST['Genero'],
    $_POST['Edad'],
    $_POST['Estado'],
    $_POST['idGrado']);

?>