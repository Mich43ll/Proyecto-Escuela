<?php
    require_once("C://wamp64/www/Escuela/view/head/head.php");
    require_once("C://wamp64/www/Escuela/controller/empleadosController.php");
    $obj = new empleadosController();
    $obj->delete($_GET['idEmpleado']);
?>