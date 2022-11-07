<?php

class alumnosController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/alumnosModel.php");
        $this->model = new alumnosModel();

    }

    public function guardar($identidad, $nombre, $apellido, $direccion, $correo, $sexo, $edad){
     $id =  $this->model->insertar($identidad, $nombre, $apellido, $direccion, $correo, $sexo, $edad);
     return ($id!=false) ? header("Location:show.php?id=".$id)  :  header("Location:IngresarAlumno.php");
    }
    public function show($id){
      return($this->model->show($id) != false) ? $this->model->show($id)  : header("Location:index.php");
    }
    public function index(){
      return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id, $identidad, $nombre, $apellido, $direccion, $correo, $sexo, $edad){
      return ($this->model->update($id, $identidad, $nombre, $apellido, $direccion, $correo, $sexo, $edad) != false) ? header("Location:show.php?id=".$id)  :  header("Location:index.php");
     }


}


?>