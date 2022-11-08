<?php
require_once("C://wamp64/www/Escuela/view/head/head.php");
require_once("C://wamp64/www/Escuela/controller/matriculascontroller.php");
$obj = new matriculasController();
$date = $obj-> show($_GET['idMatricula']);
?>

<h2 class="text-center"> Detalle del Registro </h2>
<div class= "pb-3">
    <a href="indexmatricula.php" class= "btn btn-primary" >Regresar</a>
    <a href="edit.php?id= <?= $date[0]?> "class= "btn btn-success">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea Eliminar el Registro?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez Eliminado ese Registro no se Podra Recuperar
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id= <?= $date[0]?>" class="btn btn-danger">Eliminar </a>
        </div>
        </div>
    </div>
    </div>


</div>

<table class = "table container-fluid"> 
    <thead>
        <tr>
            <th scope= "col"> Id</th>
            <th scope= "col"> Id Alumno</th>
            <th scope= "col"> Jornada</th>
            <th scope= "col"> Id Grado</th>
        </tr>
    </thead> 
    <tbody>
        <tr>
            <td scope= "col"><?= $date[0]?></td>
            <td scope= "col"><?= $date[1]?></td>
            <td scope= "col"><?= $date[2]?></td>
            <td scope= "col"><?= $date[3]?></td>
        </tr>
    </tbody>


</table>

<?php
require_once("C://wamp64/www/Escuela/view/head/footer.php");
?>
