<!--ESTE ES UN MODELO BASADO EN LA BASE DE DATOS
LO QUE HARA ES TRAER LOS CAMPOS  QUE FUERON CREADOS EN 
MYSQL -->
<?php

//la clase notasModel es exactamente el archivo como lo tiene
class notasModel{
    private $PDO;
    public function __construct()
    {
        require_once("C://xampp/htdocs/Escuela/config/db.php");
        $con = new db();
        //ALMACENAR LA CONEXION LA QUE BUSCA EL METODO DE ESTO PARA RETORNAR LOS DATOS
        $this ->PDO= $con->conexion();
    }

    public function insertar($primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado ){
        $statement = $this->PDO->prepare("INSERT INTO controlnotas VALUES(null,:primerParcial,:segundoParcial,:tercerParcial,:promedio,:idClase,:idAlumno,:idEmpleado)");
        $statement->bindParam(":primerParcial",$primerParcial);
        $statement->bindParam(":segundoParcial",$segundoParcial);
        $statement->bindParam(":tercerParcial",$tercerParcial);
        $statement->bindParam(":promedio",$promedio);
        $statement->bindParam(  ":idClase",$idClase);
        $statement->bindParam(":idAlumno",$idAlumno);
        $statement->bindParam( ":idEmpleado",$idEmpleado);
    
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function show($idNotas){
        $statement = $this->PDO->prepare("SELECT cn.idNotas, cn.primerParcial, cn.segundoParcial,
        cn.tercerParcial, cn.promedio, c.NombreClase, a.NombreCompleto,   
        e.NombreCompleto
        FROM escuela.controlnotas cn join escuela.alumnos a on cn.idAlumno = a.idAlumno
        join escuela.clase c on c.idClase = cn.idClase
        join escuela.empleados e on cn.idEmpleado = e.idEmpleado
         where idNotas= :idNotas ");
        $statement->bindParam(":idNotas", $idNotas);
        return($statement->execute()) ? $statement->fetch(): false;

    }

    public function visualizar($idNotas){
        $statement = $this->PDO->prepare("SELECT cn.idNotas, cn.primerParcial, cn.segundoParcial,
        cn.tercerParcial, cn.promedio, c.NombreClase, a.NombreCompleto,   
        e.NombreCompleto
        FROM escuela.controlnotas cn join escuela.alumnos a on cn.idAlumno = a.idAlumno
        join escuela.clase c on c.idClase = cn.idClase
        join escuela.empleados e on cn.idEmpleado = e.idEmpleado
         where idNotas= :idNotas ");
        $statement->bindParam(":idNotas", $idNotas);
        return($statement->execute()) ? $statement->fetch(): false;

    }

    public function index(){
        $statement = $this->PDO->prepare("SELECT cn.idNotas, cn.primerParcial, cn.segundoParcial,
        cn.tercerParcial, cn.promedio, c.NombreClase, a.NombreCompleto,   
        e.NombreCompleto
        FROM escuela.controlnotas cn join escuela.alumnos a on cn.idAlumno = a.idAlumno
        join escuela.clase c on c.idClase = cn.idClase
        join escuela.empleados e on cn.idEmpleado = e.idEmpleado");
        return ($statement -> execute()) ?  $statement->fetchAll(): false;
    }
    
    public function update($id, $primerParcial, $segundoParcial, $tercerParcial, $promedio, $idClase, $idAlumno, $idEmpleado ){
        $statement=$this->PDO->prepare("UPDATE escuela.controlnotas SET primerParcial = :primerParcial, segundoParcial= :segundoParcial,
        tercerParcial=:tercerParcial, promedio=:promedio, idClase=:idClase, idAlumno= :idAlumno, idEmpleado= :idEmpleado WHERE idNotas = :idNotas ");
           $statement->bindParam(":primerParcial",$primerParcial);
           $statement->bindParam(":segundoParcial",$segundoParcial);
           $statement->bindParam(":tercerParcial",$tercerParcial);
           $statement->bindParam(":promedio",$promedio);
           $statement->bindParam(  ":idClase",$idClase);
           $statement->bindParam(":idAlumno",$idAlumno);
           $statement->bindParam( ":idEmpleado",$idEmpleado);
           $statement->bindParam(":idNotas", $idNotas);

           return($statement->execute()) ? $id: false;
    }


}

?>