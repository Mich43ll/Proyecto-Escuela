<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");

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



<form action="IngresarClase.php"  method ="POST" autocomplete="off">
<?php


$obj=new clasesController();
if(isset($_POST['submit'])){
  $obj-> guardar(
  $NombreClase= $_POST['NombreClase'],
  $Estado= $_POST['Estado'],
  $idEmpleado= $_POST['idEmpleado'],
  );
}

?>



<h1>Ingresar Clase</h1>
  <div class="inset">

  <p>
    <label for="text">Nombre Clase</label>
    <input type="text" name="NombreClase" >
  </p>

  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>



  <p>
    <label for="text">Id Empleado</label>
    <input type="text" name="idEmpleado" >
  </p>



  <button type="submit" name= "submit"class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="indexClases.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>