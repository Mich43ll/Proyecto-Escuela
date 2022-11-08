<?php

class clasesController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/clasesModel.php");
        $this->model = new clasesModel();

    }

    public function guardar($NombreClase, $Estado, $FK_IdEmpleado){
     $Id_Clase =  $this->model->insertar( $NombreClase, $Estado, $FK_IdEmpleado);
     return ($Id_Clase!=false) ? header("Location:showClass.php?Id_Clase=".$Id_Clase)  :  header("Location:IngresarClase.php");
    }

    public function show($Id_Clase){
      return($this->model->show($Id_Clase) !=false) ? $this ->model->show($Id_Clase): header("Location:indexClass.php") ;
    }



}


?>