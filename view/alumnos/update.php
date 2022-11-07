<?php
    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $user = $obj->update(
                        $_POST['idAlumnos'],
                        $_POST['NombreCompleto'],
                        $_POST['Direccion'],
                        $_POST['Genero'],
                        $_POST['Edad'],
                        $_POST['Estado'],
                        $_POST['idGrado']);
?>