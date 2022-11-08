<?php

require_once("C://wamp64/www/Escuela/view/head/head.php");
require_once("C://wamp64/www/Escuela/view/notas/validaciones.php");
require_once("C://wamp64/www/Escuela/controller/notasController.php");


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



<form action="IngresarNota.php"  method ="POST" autocomplete="off">


<?php
$obj = new notasController();
if(isset($_POST['submit'])){
  $obj->guardar(
  $primero = $_POST['primerParcial'],
  $segundo = $_POST['segundoParcial'],
  $tercero = $_POST['tercerParcial'],
  $promedio = ((int)$primero+(int)$segundo+(int)$tercero)/3 ,
  $alumno = $_POST['idAlumno'],
  $clase = $_POST['idClase'],
  $empleado = $_POST['idEmpleado']
  );
}
?>
<h1>Ingresar Notas del Alumno</h1>
  <div class="inset">

  <p>
    <label for="text">Primer Parcial</label>
    <input type="text" name="primerParcial" >
  </p>

  <p>
    <label for="text">Segundo Parcial</label>
    <input type="text" name="segundoParcial">
  </p>



  <p>
    <label for="text">Tercer Parcial</label>
    <input type="text" name="tercerParcial" >
  </p>




  <p>
    <label for="text">Clase</label>
    <input type="text" name="idClase">
  </p>
  


  <p>
    <label for="text">Alumno</label>
    <input type="text" name="idAlumno">
  </p>

  <p>
    <label for="text">Maestro</label>
    <input type="text" name="idEmpleado" >
  </p>



  <button type="submit" name ="submit"class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>

  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://wamp64/www/Escuela/view/head/footer.php");

?>