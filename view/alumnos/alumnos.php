<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");

?>

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="VisualizarAlumnos.php"  method ="POST" autocomplete="off">
  <h1>Ingresar Nombre del Alumno</h1>
  <div class="inset">

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="primerParcial" >
  </p>

  <p>
    <label for="text">Genero</label>
    <input type="text" name="segundoParcial">
  </p>



  <p>
    <label for="text">Edad</label>
    <input type="text" name="tercerParcial" >
  </p>




  <p>
    <label for="text">Estado</label>
    <input type="text" name="idClase">
  </p>
  

  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>