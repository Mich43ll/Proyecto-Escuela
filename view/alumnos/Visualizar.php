<?php

require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
$obj = new pruebaController();
$obj->guardar(
$_POST['prueba']
);



?>