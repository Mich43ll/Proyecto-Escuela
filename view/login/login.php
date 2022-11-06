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

$primerParcial="";
$segundoParcial="";
$tercerParcial="";
$idClase="";
$idAlumno="";
$idEmpleado="";

if(isset($_POST['primerParcial'])){
  $primerParcial= $_POST['primerParcial'];
  $segundoParcial= $_POST['segundoParcial'];
  $tercerParcial= $_POST['tercerParcial'];
  $idClase= $_POST['idClase'];
  $idAlumno= $_POST['idAlumno'];
  $idEmpleado= $_POST['idEmpleado'];
  
  $campos = array();
  
  if($primerParcial==""){
        array_push($campos, "El campo primer parcial no debe estar vacio");
  }
  if($segundoParcial==""){
    array_push($campos, "El campo segundo parcial no debe estar vacio");
  }

  if($tercerParcial==""){
    array_push($campos, "El campo tercer parcial no debe estar vacio");
  }
  if($idClase==""){
    array_push($campos, "El campo clase no debe estar vacio");
  }

  if($idAlumno==""){
    array_push($campos, "El campo alumno no debe estar vacio");
  }
  if($idEmpleado==""){
    array_push($campos, "El campo empleado no debe estar vacio");
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



<h1>Ingresar Notas del Alumno</h1>
  <div class="inset">

  <p>
    <label for="text">Usuario</label>
    <input type="text" name="primerParcial" >
  </p>

  <p>
    <label for="text">Contraseña</label>
    <input type="text" name="segundoParcial">
  </p>


  <button type="submit" class="btn btn-primary">Ingresar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>