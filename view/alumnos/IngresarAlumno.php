<?php

require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");

?>

<link rel="stylesheet" href="./css/form.css">

<!--ACCION QUE VA A REALIZAR PARA GUARDAR LOS DATOS EL POST Y LA RUTA SE VA A ENVIAR A LA TABLA PARA VISUALIZAR
EL REGISTRO EN ACTION="VISUALIZARNOTA.PHP"-->
<form action="IngresarAlumno.php"  method ="POST" autocomplete="off">

<?php
    if(isset($_POST['NombreCompleto'])){
      $nombre= $_POST['NombreCompleto'];
      $direccion= $_POST['Direccion'];
      $genero= $_POST['Genero'];
      $edad= $_POST['Edad'];
      $estado= $_POST['Estado'];
      $idGrado= $_POST['idGrado'];

      $campos = array();
      if($nombre == ""){
        array_push($campos, "El campo NombreCompleto no puede estar vacío");
      }
      if($direccion == ""){
        array_push($campos, "El campo direccion no puede estar vacío");
      }
      if($genero == ""){
        array_push($campos, "El campo genero no puede estar vacío");
      }
      if($edad == ""){
        array_push($campos, "El campo edad no puede estar vacío");
      }
      if($estado == ""){
        array_push($campos, "El campo estado no puede estar vacío");
      }
      if($idGrado == ""){
        array_push($campos, "El campo idGrado no puede estar vacío");
      }

      if(count($campos) >0){
        echo "error";
        for($i = 0; $i < count($campos); $i++){
            echo "<li>".$campos[$i]."</li>";
        }
      }else{
          $obj = new alumnosController();
          $obj->guardar(
          $nombre= $_POST['NombreCompleto'],
          $direccion= $_POST['Direccion'],
          $genero= $_POST['Genero'],
          $edad= $_POST['Edad'],
          $estado= $_POST['Estado'],
          $idGrado= $_POST['idGrado'],);
      }
    }
/*if(isset['submit']){
  if(empty($nombre)){
    header("Location:IngresarAlumno.php");
  }
  else{
    $obj = new alumnosController();
    $obj->guardar(
    $nombre= $_POST['NombreCompleto'],
    $direccion= $_POST['Direccion'],
    $genero= $_POST['Genero'],
    $edad= $_POST['Edad'],
    $estado= $_POST['Estado'],
    $idGrado= $_POST['idGrado'],);
  }
}
*/
?>
  <h1>Ingresar Alumno</h1>
  <div class="inset">

  <p>
    <label for="text">NombreCompleto</label>
    <input type="text" name="NombreCompleto" >
  </p>

  <p>
    <label for="text">Direccion</label>
    <input type="text" name="Direccion">
  </p>

  <p>
    <label for="text">Genero</label>
    <input type="text" name="Genero" >
  </p>

  <p>
    <label for="text">Edad</label>
    <input type="text" name="Edad">
  </p>
  <p>
    <label for="text">Estado</label>
    <input type="text" name="Estado">
  </p>
  
  <p>
    <label for="text">idGrado</label>
    <input type="text" name="idGrado">
  </p>

    <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
    <a class="btn btn-danger" href="ListarAlumnos.php">Cancelar</a>
  
 
  
  </div>

</form>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>