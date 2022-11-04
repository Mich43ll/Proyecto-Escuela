<?php
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
require_once("C://xampp/htdocs/Escuela/controller/notasController.php");
$obj = new notasController();
$rows= $obj->indiceprueba();



?>
<link rel="stylesheet" href="../../assets/plugins/dist/sweetalert2.min.css" >
<link rel="stylesheet" href="../../assets/plugins/dist/sweetalert2.css" >
<script src="../../assets/plugins/dist/sweetalert2.all.min.js"></script>
<script src="../../assets/plugins/dist/sweetalert2.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="./css/tablenota.css">
<script src="./js/tablenota.js"></script>




<h1>Notas de los Alumnos</h1>
<div class="mb-3">
        <a href="/Escuela/view/notas/IngresarNota.php" class="btn btn-success">Agregar nuevo registro</a>
</div>





<table class="table table-hover">
   <!--ENCABEZADO DE LA TABLA--> 
        <thead >
            <tr  >
            <th scope="col">ID</th>
            <th scope="col" >ALUMNO</th>
            <th scope="col">CLASE</th>
            <th scope="col">PRIMER PARCIAL</th>
            <th scope="col">SEGUNDO PARCIAL</th>
            <th scope="col">TERCER PARCIAL</th>
            <th scope="col">PROMEDIO</th>
            <th scope="col">MAESTRO</th>
            <th scope="col" width="22%"  rowspan="4">ACCIONES</th>
     
            </tr>
        </thead>
       <!--ENCABEZADO DE LA TABLA--> 

        <!--CONTENIDO DE LA TABLA--> 

        <tbody>
            <?php if($rows): ?>
            <!------------------------------------------------>
                <?php foreach($rows as $row): ?>
            <!------------------------------------------------>
                            <tr >
                                <th scope="col" ><?= $row[0] ?></th>
                                <th scope="col"><?= $row[6] ?></th>
                                <th scope="col"><?= $row[5] ?></th>
                                <th scope="col"><?= $row[1] ?></th>
                                <th scope="col"><?= $row[2] ?></th>
                                <th scope="col"><?= $row[3] ?></th>
                                <th scope="col"><?= $row[4] ?></th>
                                <th scope="col"><?= $row[7] ?></th>
                                    
                                <!------ACCIONES A REALIZAR--------------->
                      
                                <td style="text-align: center;" >
                                    <a href="VerIdNotas.php?idNotas=<?=$row[0]?>" class="btn btn-primary">Ver</a>
                                    <a href="edit.php?idNotas=<?=$row[0]?>" class="btn btn-success">Modificar</a>

                                <!---MODAL ELIMINAR-------------------------------->
                                <!-- Button trigger modal -->
                                 <a  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title fs-5" id="exampleModalLabel">Desea eliminar el registro de <?=$row[7]?> ? </h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Una vez eliminado, no podra ser revertido nuevamente el registro.
                                            </div>
                                            <div class="modal-footer">
                                            <!--aqui se pone la variable del objeto y con la posicion de la columna dela base-->
                                                <a href="delete.php?idNotas=<?=$row[0] ?>" type="button" class="btn btn-danger">Eliminar</a>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </td>            
                                <!------------------MODAL ELIMINAR---------------->
                                <!------ACCIONES A REALIZAR--------------->
                                
                            </tr>
            <!------------------------------------------------>
                <?php endforeach; ?>
            <!------------------------------------------------>
            <?php else: ?>

                <tr>
                    <td colspan="9" class="text-center">No hay registros acutalmente</td>
                </tr>
            <!------------------------------------------------> 
            <?php endif; ?>

            <!------------------------------------------------>

        </tbody>
        <!--CONTENIDO DE LA TABLA--> 
</table>









<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>