<?php

class clasesController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/clasesModel.php");
        $this->model = new clasesModel();

    }

    public function guardar($Id_Clase, $NombreClase, $Estado, $FK_IdEmpleado){
      $Id_Clase =  $this->model->insertar($Id_Clase, $NombreClase, $Estado, $FK_IdEmpleado);
     return ($Id_Clase!=false) ? header("Location:indexClase.php")  :  header("Location:IngresarClase.php");
    }


    public function visualizar($Id_Clase){
      return($this ->model->visualizar($Id_Clase)!=false)? $this->model->visualizar($Id_Clase): header("Location:VerId_Clase.php");
    }

    public function indexClase(){
      return($this->model->indexClase()) ? $this->model->indexClase() : false; 
    }

    public function indiceprueba(){
      return($this->model->indiceprueba()) ? $this->model->indiceprueba() : false; 
    }

    public function update($Id_Clase, $NombreClase, $Estado, $FK_IdEmpleado){
      return ($this->model->update($Id_Clase, $NombreClase, $Estado, $FK_IdEmpleado) != false) 
      ? header("Location:indexNota.php") : header("Location:VerIdNotas.php?idNotas=".$Id_Clase) ;
    }

    public function delete($Id_Clase){
      return ($this->model->delete($Id_Clase)) ? header("Location:indexNota.php") : header("Location:VerIdNotas.php?idNotas=".$Id_Clase) ;
    }

    

}


?>