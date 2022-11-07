<?php
    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $user = $obj->update(
                        $_POST['id'],
                        $_POST['identidad'],
                        $_POST['nombre'],
                        $_POST['apellido'],
                        $_POST['direccion'],
                        $_POST['correo'],
                        $_POST['sexo'],
                        $_POST['edad']);
?>