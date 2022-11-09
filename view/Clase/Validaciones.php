<?php
if (isset($_POST['submit'])) {
    if (empty($NombreClase)) {
        echo "<p class='error'>* Agregue el Nombre de la Clase</p>";


}
        }
    
    if (empty($Estado)) {
        echo "<p class='error'>* ingrese el estado</p>";
    } else {
        if (!is_numeric($Estado)) {
            echo "<p class='error'>* Solo puede ingresar numeros</p>";
        }
    }
    if (empty($idEmpleado)) {
        echo "<p class='error'>* necesita el Id del empleado</p>";
    } else {
        if (!is_numeric($idEmpleado)) {
            echo "<p class='error'>* Solo puede ingresar numeros</p>";
        }
    }
    

