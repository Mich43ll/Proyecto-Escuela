<?php

require_once("C://wamp64/www/Escuela/view/head/head.php");
require_once("C://wamp64/www/Escuela/controller/matriculascontroller.php");

?>

<link rel="stylesheet" href="./css/form.css">
<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="create.php"  method ="POST" autocomplete="off">
<?php

$obj = new matriculasController();
if(isset($_POST['sumbit']))
$obj->guardar( 
    $alumno=$_POST['IdAlumno'],
    $jornada=$_POST['Jornada'],
    $grado=$_POST['idGrado']
);
?>
  <h1>Ingresar Matricula</h1>
  <div class="inset">

  <p>
    <label for="text">Id Alumno</label>
    <input type="text" name="IdAlumno" >
  </p>

  <p>
    <label for="text">Jornada</label>
    <input type="text" name="Jornada">
  </p>



  <p>
    <label for="text">Id Grado</label>
    <input type="text" name="idGrado" >
  </p>

  <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
 
 
  
  </div>

</form>


<script src="./js/ingresar.js"></script>
<?php

require_once("C://wamp64/www/Escuela/view/head/footer.php");

?>