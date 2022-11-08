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

    public function insertar( $Id_Clase, $NombreClase, $Estado, $FK_IdEmpleado ){
        $statement = $this->PDO->prepare("INSERT INTO controlClases VALUES(null,:Id_Clase,:NombreClase,:Estado,:FK_IdEmpleado)");
        $statement->bindParam(  ":idClase",$Id_Clase);
        $statement->bindParam(":idAlumno",$NombreClase);
        $statement->bindParam(":idAlumno",$Estado);
        $statement->bindParam( ":idEmpleado",$FK_IdEmpleado);
    
        return ($statement->execute()) ? $this->PDO->lastInsertId(): false;
    
    }

    public function visualizar($idNotas){
            $statement = $this->PDO->prepare("select * from escuela.controlClases where Id_Clase= :Id_Clase limit 1");
            $statement ->bindParam(":Id_Clase", $Id_Clase);
            return($statement->execute()) ? $statement->fetch():false;
    }

    public function indexClase(){
            $statement = $this->PDO->prepare("select * from escuela.controlClase");
            return($statement->execute()) ? $statement -> fetchAll() : false;
    }

    public function update($Id_Clase, $NombreClase, $Estado, $FK_IdEmpleado){
            $statement = $this->PDO->prepare("update escuela.controlClase
            set Id_Clase=:Id_Clase, NombreClase=:NombreClase, Estado=:Estado, FK_IdEmpleado=:FK_IdEmpleado "); 

           
            $statement->bindParam( ":Id_Clase",$Id_Clase);
            $statement->bindParam( ":NombreClase",$NombreClase);
            $statement->bindParam(":Estado",$Estado);
            $statement->bindParam(":FK_IdEmpleado", $FK_IdEmpleado);
            return($statement->execute()) ? $Id_Clase: false;
    }


    //PRUEBA
    public function indiceprueba(){
        $statement = $this->PDO->prepare("SELECT a.Id_Clase, cn.NombreClase, cn.Estado, cn.FK_IdEmpleado,

        FROM escuela.controlClase cn join escuela.clase a on cn.Id_Clase = a.Id_Clase
        join escuela.clase c on c.idClase = cn.Id_Clase
        join escuela.empleados e on cn. = e.FK_IdEmpleado");
        return($statement->execute()) ? $statement -> fetchAll() : false;
}
    //PRUEBA




    public function delete($Id_Clase){
        $statement = $this ->PDO->prepare("DELETE FROM controlClase  WHERE Id_Clase = :Id_Clase ");
        $statement->bindParam(":Id_Clase",$Id_Clase);
        return($statement->execute())? true : false;
    }


}

?>