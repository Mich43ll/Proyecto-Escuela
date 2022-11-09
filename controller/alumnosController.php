<?php

class alumnosController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/alumnosModel.php");
        $this->model = new alumnosModel();

    }

    public function guardar($NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado){
        $idAlumnos =  $this->model->insertar($NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado);
        //return ($idAlumnos!=false) ? header("Location:show.php?idAlumnos=".$idAlumnos)  :  header("Location:IngresarAlumno.php");
      
    }
    public function show($idAlumnos){
      return($this->model->show($idAlumnos) != false) ? $this->model->show($idAlumnos)  : header("Location:index.php");
    }
    public function index(){
      return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($idAlumnos, $NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado){
      return ($this->model->update($idAlumnos, $NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado) != false) ? header("Location:show.php?idAlumnos=".$idAlumnos)  :  header("Location:index.php");
    }
     public function delete($idAlumnos){
      return ($this->model->delete($idAlumnos)) ? header("Location:index.php") : header("Location:show.php?idAlumnos=".$idAlumnos);
    }


}


?>