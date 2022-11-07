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

    public function insertar($identidad, $nombre, $apellido, $direccion, $correo, $sexo, $edad){
        $statement = $this->PDO->prepare("INSERT INTO alumnos (identidad, nombre, apellido, direccion, correo, sexo, edad) VALUES(:identidad,:nombre,:apellido,:direccion,:correo,:sexo,:edad)");
        $statement->bindParam(":identidad",$identidad);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":apellido",$apellido);
        $statement->bindParam(":direccion",$direccion);
        $statement->bindParam(":correo",$correo);
        $statement->bindParam(":sexo",$sexo);
        $statement->bindParam(":edad",$edad);
    
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($id){
        $statement = $this->PDO->prepare("SELECT * FROM alumnos where id = :id ");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch(): false;

    }
    public function index(){
        $statement = $this->PDO->prepare("SELECT * FROM alumnos");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
    public function update($id, $identidad, $nombre, $apellido, $direccion, $correo, $sexo, $edad){
        $statement = $this->PDO->prepare("UPDATE alumnos SET identidad = :identidad, nombre = :nombre, apellido = :apellido, direccion = :direccion, correo = :correo, sexo = :sexo, edad = :edad WHERE id = :id ");
        $statement->bindParam(":identidad",$identidad);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":apellido",$apellido);
        $statement->bindParam(":direccion",$direccion);
        $statement->bindParam(":correo",$correo);
        $statement->bindParam(":sexo",$sexo);
        $statement->bindParam(":edad",$edad);
        $statement->bindParam(":id",$id);
        return ($statement->execute()) ? $id : false;
    }
    
}

?>