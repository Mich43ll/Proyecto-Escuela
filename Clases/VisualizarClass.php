<?php

require_once("C://xampp/htdocs/Escuela/controller/clasesController.php");
$obj = new pruebaController();
$obj->guardar(
$_POST['prueba']
);



?>