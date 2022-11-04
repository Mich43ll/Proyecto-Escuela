<?php

require_once("C://xampp/htdocs/Escuela/controller/empleadosController.php");
$obj = new pruebaController();
$obj->guardar(
$_POST['prueba']
);



?>