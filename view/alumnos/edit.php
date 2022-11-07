<?php
    require_once("C://xampp/htdocs/Escuela/view/head/head.php");
    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php"  method ="POST" autocomplete="off">
        <h1>Modificando Registro de Alumno</h1>
        <div class="inset">

        <p>
            <label for="text">id</label>
            <input type="text" name="id" readonly  value="<?= $user[0]?>" >
        </p>

        <p>
            <label for="text">Nueva identidad</label>
            <input type="text" name="identidad" value="<?= $user[1]?>" >
        </p>

        <p>
            <label for="text">Nuevo Nombre</label>
            <input type="text" name="nombre" value="<?= $user[2]?>">
        </p>

        <p>
            <label for="text">Nuevo Apellido</label>
            <input type="text" name="apellido" value="<?= $user[3]?>">
        </p>

        <p>
            <label for="text">Nueva Direccion</label>
            <input type="text" name="direccion" value="<?= $user[4]?>">
        </p>
        
        <p>
            <label for="text">Nuevo Correo</label>
            <input type="text" name="correo" value="<?= $user[5]?>">
        </p>

        <p>
            <label for="text">sexo</label>
            <input type="text" name="sexo" value="<?= $user[6]?>">
        </p>

        <p>
            <label for="text">edad</label>
            <input type="text" name="edad" value="<?= $user[7]?>"
        </p>        
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
        </div>

    </form>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>