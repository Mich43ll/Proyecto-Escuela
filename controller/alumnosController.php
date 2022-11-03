<?php

class alumnosController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/alumnosModel.php");
        $this->model = new alumnosModel();

    }

    public function guardar($NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado){
     $idAlumno =  $this->model->insertar($NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado);
     return ($idAlumno!=false) ? header("Location:show.php?idAlumno=".$idAlumno)  :  header("Location:IngresarAlumno.php");
    }

    public function show($idAlumno){
      return($this->model->show($idAlumno) !=false) ? $this ->model->show($idAlumno): header("Location:index.php") ;
    }



}


?>