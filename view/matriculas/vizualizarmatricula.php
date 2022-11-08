<?php
require_once("C://wamp64/www/Escuela/controller/matriculascontroller.php");
$obj = new matriculasController();
$obj->guardar( 
    $_POST['IdAlumno'],
    $_POST['Jornada'],
    $_POST['idGrado']
);
?>
