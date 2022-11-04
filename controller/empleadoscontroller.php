<?php

class empleadosController{
    private $model;

    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/model/empleadosModel.php");
        $this->model = new empleadosModel();

    }

    public function guardar($NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado){
     $idAlumno =  $this->model->insertar($NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado);
     return ($idEmpleados!=false) ? header("Location:showEmpl.php?idEmpleados=".$idEmpleados)  :  header("Location:IngresarEmpleado.php");
    }

    public function show($idEmpleado){
      return($this->model->show($idEmpleado) !=false) ? $this ->model->show($idEmpleado): header("Location:indexEmpl.php") ;
    }



}


?>