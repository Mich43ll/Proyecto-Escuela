<?php

require_once("C://xampp/htdocs/Escuela/controller/notasController.php");
$obj = new notasController();
$obj->guardar(
$_POST['primerParcial'],
$_POST['segundoParcial'],
$_POST['tercerParcial'],
$_POST['promedio']=($_POST['primerParcial']+$_POST['segundoParcial']+$_POST['tercerParcial'])/3,
$_POST['idClase'],
$_POST['idAlumno'],
$_POST['idEmpleado'],



);



?>