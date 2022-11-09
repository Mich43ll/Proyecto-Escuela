<?php

class clasesController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/clasesModel.php");
        $this->model = new clasesModel();

    }

    public function guardar( $NombreClase, $Estado, $idEmpleado){
      $idClase =  $this->model->insertar($NombreClase, $Estado, $idEmpleado);
    // return ($idClase!=false) ? header("Location:indexClase.php")  :  header("Location:IngresarClase.php");
    }


    public function visualizar($idClase){
      return($this ->model->visualizar($idClase)!=false)? $this->model->visualizar($idClase): header("Location:indexClase.php");
    }

    public function indexClase(){
      return($this->model->indexClase()) ? $this->model->indexClase() : false; 
    }

    public function update($idClase, $NombreClase, $Estado, $idEmpleado){
      return ($this->model->update($idClase, $NombreClase, $Estado, $idEmpleado) != false) 
      ? header("Location:indexClase.php") : header("Location:VeridClase.php?idClase=".$idClase) ;
    }

    public function delete($idClase){
      return ($this->model->delete($idClase)) ? header("Location:indexClase.php") : header("Location:VeridClase.php?idClase=".$idClase) ;
    }

    

}


?>