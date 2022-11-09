<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class matriculasModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://wamp64/www/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($IdAlumno,$Jornada,$idGrado){
       $statement = $this->PDO->prepare("INSERT INTO matriculas VALUES(null,:IdAlumno,:Jornada,:idGrado)");
       $statement->bindParam(":IdAlumno",$IdAlumno);
       $statement->bindParam(":Jornada",$Jornada);
       $statement->bindParam(":idGrado",$idGrado);
        
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function visualizar($idMatricula){
        $statement = $this->PDO->prepare("select * from escuela.matriculas where idMatricula= :idMatricula limit 1");
        $statement ->bindParam(":idMatricula", $idMatricula);
        return($statement->execute()) ? $statement->fetch():false;
    }
    public function indexmatricula(){
        $statement = $this->PDO->prepare("select * from escuela.matriculas");
        return($statement->execute()) ? $statement -> fetchAll() : false;



    }
    


}

?>