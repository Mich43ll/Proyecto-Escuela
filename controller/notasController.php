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



}


?>