<?php
class matriculasController{
    private $model;
    public function __construct()
    {
    require_once("C://wamp64/www/Escuela/model/matriculasModel.php");
    $this->model = new matriculasModel();
    }
    public function guardar($idAlumno,$Jornada,$idGrado ){
        $idMatricula =  $this->model->insertar($idAlumno,$Jornada, $idGrado);
        //return ($idMatricula!=false) ? header("Location:show.php? id=". $idMatricula)  :  header("Location:create.php");
    }

    public function visualizar($idClase){
        return($this ->model->visualizar($idClase)!=false)? $this->model->visualizar($idClase): header("Location:indexmatricula.php");
      
      }
      public function indexmatricula(){
        return($this->model->indexmatricula()) ? $this->model->indexmatricula() : false; 
      
    }

    public function delete($idMatricula){
        return ($this->model->delete($idMatricula)) ? header("Location:indexmatricula.php") : header("Location:verId.php?idMatricula=".$idMatricula) ;
      }
    public function indiceprueba(){
        return($this->model->indiceprueba()) ? $this->model->indiceprueba() : false; 
      }
  

    


    


}
?>