<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

?>

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="guardar.php"  method ="POST" autocomplete="off">
  <h1>Ingresar Empleado</h1>
  <div class="inset">

  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" >
  </p>

  <p>
    <label for="text">idCargo</label>
    <input type="text" name="idCargo">
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion" >
  </p>

  <p>
    <label for="text">Telefono</label>
    <input type="text" name="Telefono">
  </p>
  
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>
  
  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>