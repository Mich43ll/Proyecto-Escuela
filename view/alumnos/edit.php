<?php
    require_once("C://xampp/htdocs/Escuela/view/head/head.php");
    require_once("C://xampp/htdocs/Escuela/controller/alumnosController.php");
    $obj = new alumnosController();
    $user = $obj->show($_GET['id']);
?>
    <form action="update.php"  method ="POST" autocomplete="off">
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



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>