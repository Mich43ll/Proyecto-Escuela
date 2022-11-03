<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class alumnosModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado){
        $statement = $this->PDO->prepare("INSERT INTO alumnos VALUES(null,:NombreCompleto,:Edad,:Genero,:Direccion,:Estado,:idGrado)");
        $statement->bindParam(":NombreCompleto",$NombreCompleto);
        $statement->bindParam(":Edad",$Edad);
        $statement->bindParam(":Genero",$Genero);
        $statement->bindParam(":Direccion",$Direccion);
        $statement->bindParam(":Estado",$Estado);
        $statement->bindParam(":idGrado",$idGrado);
    
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($idAlumno){
        $statement = $this->PDO->prepare("SELECT cn.idAlumno, cn.NombreCompleto, cn.Direccion,
        cn.Genero, cn.Edad, cn.Estado, cn.idGrado,  c.NombreClase, a.NombreCompleto,   
        e.NombreCompleto 
        FROM escuela.Grado cn join escuela.alumnos a on cn.idAlumno = a.idAlumno
         where idAlumno= :idAlumno");
        $statement->bindParam(":idAlumno", $idAlumno);
        return($statement->execute()) ? $statement->fetch(): false;

    }
    
}

?>