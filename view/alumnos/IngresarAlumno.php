<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

?>

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="guardar.php"  method ="POST" autocomplete="off">
  <h1>Ingresar Alumno</h1>
  <div class="inset">

  <p>
    <label for="text">identidad</label>
    <input type="text" name="identidad" >
  </p>

  <p>
    <label for="text">nombre</label>
    <input type="text" name="nombre">
  </p>

  <p>
    <label for="text">apellido</label>
    <input type="text" name="apellido" >
  </p>

  <p>
    <label for="text">direccion</label>
    <input type="text" name="direccion">
  </p>
  
  <p>
    <label for="text">correo</label>
    <input type="text" name="correo">
  </p>

  <p>
    <label for="text">sexo</label>
    <input type="text" name="sexo">
  </p>

  <p>
    <label for="text">edad</label>
    <input type="text" name="edad">
  </p>

  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>