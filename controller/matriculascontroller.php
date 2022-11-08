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

    public function show($idMatricula){
        return($this ->model->show($idMatricula)!=false)? $this->model->show($idMatricula): header("Location:vizualizarmatricula.php");
      }
    public function indexotro(){
        return ($this->model->indexotro()) ? $this->indexotro(): false;



    }


    


}
?>