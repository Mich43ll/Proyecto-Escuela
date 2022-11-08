<?php

require_once("C://wamp64/www/Escuela/controller/pruebaController.php");
$obj = new pruebaController();
$obj->guardar(
$_POST['prueba']
);



?>