<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class clasesModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($NombreClase, $Estado, $FK_IdEmpleado){
        $statement = $this->PDO->prepare("INSERT INTO clases VALUES(null,:NombreClase,:Id_Clase,:Estado,:FK_IdEmpleado)");
        $statement->bindParam(":NombreClase",$NombreClase);
        $statement->bindParam(":Estado",$Estado);    
        $statement->bindParam(":FK_IdEmpleado",$FK_IdEmpleado);
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($Id_Clase){
        $statement = $this->PDO->prepare("SELECT cn.Id_Clase, cn.NombreClase, cn.Estado, cn.FK_IdEmpleado
        FROM escuela.clases  join escuela.clases a on cn.Id_Clase = a.Id_Clase
         where Id_Clase = :Id_Clase");
        $statement->bindParam(":Id_Clase", $iId_Clase);
        return($statement->execute()) ? $statement->fetch(): false;
    }
}