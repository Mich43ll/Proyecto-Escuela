<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class empleadosModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado){
        $statement = $this->PDO->prepare("INSERT INTO empleados VALUES(null,:NombreCompleto,:idCargo,:Direccion,:Telefono,:Estado,)");
        $statement->bindParam(":NombreCompleto",$NombreCompleto);
        $statement->bindParam(":idCargo",$idCargo);
        $statement->bindParam(":Direccion",$Direccion);
        $statement->bindParam(":Telefono",$Telefono);
        $statement->bindParam(":Estado",$Estado);    
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($idEmpleado){
        $statement = $this->PDO->prepare("SELECT cn.idEmpleado, cn.NombreCompleto, cn.idGrado, cn.Direccion,
        cn.Telefono, cn.Estado
        FROM escuela.cargo  join escuela.empleados a on cn.idCargo = a.idCargo
         where idCargo = :idCargo");
        $statement->bindParam(":idCargo", $idCargo);
        return($statement->execute()) ? $statement->fetch(): false;
    }
}