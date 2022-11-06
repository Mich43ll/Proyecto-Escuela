<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

?>

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="VisualizarClases.php"  method ="POST" autocomplete="off">
  <h1>Ingresar Clase</h1>
  <div class="inset">

  <p>
    <label for="text">NombreClase</label>
    <input type="text" name="NombreCompleto" >
  </p>

  <p>
    <label for="text">Id_Clase</label>
    <input type="text" name="idCargo">
  </p>

  <p>
    <label for="text">Fk_idEmpleado</label>
    <input type="text" name="Direccion">
  </p>
  


  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="indexClass.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>