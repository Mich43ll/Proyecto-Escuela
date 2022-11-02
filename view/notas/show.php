<?php
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/notasController.php");

$obj = new notasController();


 $campo = $obj  ->show($_GET['idNotas']);

?>
<!--END HEADER-->



<h2 class="text-center"> Registro de Control de Notas</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="ModificarNota.php?id=<?= $campo[0] ?>" class="btn btn-success">Actualizar</a>


<!-----ELIMINAR REGISTRO---->
<!-- Button trigger modal -->
<a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Desea eliminar el registro?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <p>
     Del registro de alumno <?= $campo[6] ?>
     </p>
     <p>
     Una vez eliminado no podra recuperar el cambio que realizó.....
     </p>
      </div>
      <div class="modal-footer">
        
       <!-- <button type="button" class="btn btn-danger">Eliminar</button>--->

       <a href="EliminarNota.php?id=<? $campo[0] ?>" class="btn btn-danger">Eliminar</a>

        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-----ELIMINAR REGISTRO---->
    
</div>



<table class=" table caption-top table-secondary table-bordered border-dark table-responsive">
  <caption>Listado de Alumnos con Notas</caption>
  <thead class="table-dark table-bordered border-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ALUMNO</th>
      <th scope="col">CLASE</th>
      <th scope="col">PRIMER PARCIAL</th>
      <th scope="col">SEGUNDO PARCIAL</th>
      <th scope="col">TERCER PARCIAL</th>
      <th scope="col">PROMEDIO</th>
      <th scope="col">MAESTRO</th>
    </tr>
  </thead>
  <!--FINAL DEL HEAD-->


  <!--INICIO DEL BODY-->
  <tbody>
        <tr>
   
            <td scope="col"><?= $campo[0] ?></td>
            <td scope="col"><?= $campo[6] ?></td>
            <td scope="col"><?= $campo[5] ?></td>
            <td scope="col"><?= $campo[1] ?></td>
            <td scope="col"><?= $campo[2] ?></td>
            <td scope="col"><?= $campo[3] ?></td>
            <td scope="col"><?= $campo[4] ?></td>
            <td scope="col"><?= $campo[7] ?></td>
        </tr>
  </tbody>
</table>

<br>

<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>