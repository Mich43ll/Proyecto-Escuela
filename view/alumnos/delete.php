<?php
    require_once("C://wamp64/www/Escuela/view/head/head.php");
    require_once("C://wamp64/www/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $obj->delete($_GET['idAlumno']);
?>