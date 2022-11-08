<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

?>

<link rel="stylesheet" href="./css/form.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<style>
.error{
  background-color: #FF9185;
  font-size: 12px;
  padding: 10px;
} 

.correcto{
  background-color: #A0DEA7;
  font-size: 12px;
  padding: 10px;
} 

</style>



<form action="registrar.php"  method ="POST" autocomplete="off">
<?php

$NombreClase="";
$Estado="";
$FK_IdEmpleado="";

if(isset($_POST['NombreClase'])){
  $idClase= $_POST['NombreClase'];
  $idAlumno= $_POST['Estado'];
  $idEmpleado= $_POST['FK_IdEmpleado'];
  
  $campos = array();
  
  if($NombreClase==""){
        array_push($campos, "El campo Nombre Clae no debe estar vacio");
  }
  if($Estado==""){
    array_push($campos, "El campo Estado no debe estar vacio");
  }

  if($FK_IdEmpleado==""){
    array_push($campos, "El campo FK_IdEmpleado no debe estar vacio");
  }


  if(count($campos)>0){
    echo "<div class='error'>";
    for($i = 0; $i <count($campos); $i++){
      echo "<li>".$campos[$i]."</div>";
    }
  }
  else{
    echo "<div class= 'correcto'>">
    "Datos correctos";
  }
  echo "</div>";

  }

?>



<h1>Ingresar Clase</h1>
  <div class="inset">

  <p>
    <label for="text">Nombre Clase</label>
    <input type="text" name="primerParcial" >
  </p>

  <p>
    <label for="text">Estado</label>
    <input type="text" name="segundoParcial">
  </p>



  <p>
    <label for="text">Id Empleado</label>
    <input type="text" name="tercerParcial" >
  </p>



  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>