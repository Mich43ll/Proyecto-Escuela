<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class matriculasModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($IdAlumno,$Jornada,$idGrado){
       $statement = $this->PDO->prepare("INSERT INTO matriculas (IdAlumno,Jornada,idGrado ) VALUES(null,:IdAlumno,:Jornada,:idGrado)");
       $statement->bindParam(":IdAlumno",$IdAlumno);
       $statement->bindParam(":Jornada",$Jornada);
       $statement->bindParam(":idGrado",$idGrado);
        
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show ($idMatricula){
        $statement = $this->PDO->prepare("SELECT * from escuela.matriculas where idMatricula= :idMatricula limit 1");
        $statement ->bindParam(":idMatricula", $idMatricula);
        return($statement->execute()) ? $statement->fetch():false;
    }
    public function indexotro(){
        $statement = $this->PDO->prepare("SELECT * FROM matriculas ");
        return($statement->execute()) ? $statement->fetchAll(): false; 



    }
    


}

?>