<?php
require_once("C://wamp64/www/Escuela/view/head/head.php");
require_once("C://wamp64/www/Escuela/controller/matriculasController.php");
$obj = new matriculasController();
$rows= $obj->indexotro();
?>
<div class="mb-3">
    <a href="/Escuela/view/notas/create.php" class="btn btn-primary ">Agregar Nuevo Usuario </a>
</div>
<table class=" table ">
      <!--ENCABEZADO DE LA TABLA--> 
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">IdAlumno</th>
            <th scope="col">Jornada</th>
            <th scope="col">idGrado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <!--ENCABEZADO DE LA TABLA--> 
    <!--CONTENIDO DE LA TABLA--> 
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row [0] ?></th>
                    <th><?= $row [1] ?></th>
                    <th><?= $row [2] ?></th>
                    <th><?= $row [3] ?></th>
                    <th><?= $row [4] ?></th>
                        <a href="show.php?id=<?=$row[0]?>"class= "btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?=$row[0]?>"class= "btn btn-success">Modificar</a>

                </tr>
            <?php endforeach ?>   
    

        <?php else: ?> 

        <?php endif; ?>  
    </tbody>
    
</table>


<?php
require_once("C://wamp64/www/Escuela/view/head/footer.php");
?>