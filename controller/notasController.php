<?php

class notasController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/notasModel.php");
        $this->model = new notasModel();

    }

    public function guardar($primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado){
     $idNotas =  $this->model->insertar($primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado);
     return ($idNotas!=false) ? header("Location:show.php?idNotas=".$idNotas)  :  header("Location:IngresarNota.php");
    }

    public function show($idNotas){
      return($this->model->show($idNotas) !=false) ? $this ->model->show($idNotas): header("Location:index.php") ;
    }

    public function visualizar($idNotas){
      return($this->model->show($idNotas) !=false) ? $this ->model->visualizar($idNotas): header("Location:index.php") ;
     
    }


    public function index(){
      return ($this->model->index()) ? $this->model->index() : false ;
    }

    public function update($primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado){
      return ($this->model->update($idNotas,$primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado)!=false) ? header("Location:show.php?idNotas=".$idNotas) : header("Location:index.php?idNotas=".$idNotas) ;
    }

    

}


?>