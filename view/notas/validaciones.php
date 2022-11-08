<?php
if (isset($_POST['submit'])) {
    if (empty($primero)) {
        echo "<p class='error'>* Agregue la nota del primero parcial</p>";
    } else {
        if (!is_numeric($primero)) {
            echo "<p class='error'>* Solo puede ingresar numeros en el primer parcial</p>";
        }else {
            if ($primero = ""){
                echo "<p class='error'>* Campo vacio</p>";
            }
        }
    }
    if (empty($segundo)) {
        echo "<p class='error'>* Agregue la nota del segundo parcial</p>";
    } else {
        if (!is_numeric($segundo)) {
            echo "<p class='error'>* Solo puede ingresar numeros en el segundo parcial</p>";
        }
    }
    if (empty($tercero)) {
        echo "<p class='error'>* Agregue la nota del tercero parcial</p>";
    } else {
        if (!is_numeric($tercero)) {
            echo "<p class='error'>* Solo puede ingresar numeros en el tercer parcial</p>";
        }
    }
    if (empty($alumno)) {
        echo "<p class='error'>* Ingrese el Id del alumno</p>";
    } else {
        if (!is_numeric($alumno)) {
            echo "<p class='error'>* Solo puede ingresar numeros en el Id del alumno</p>";
        }
    }
    if (empty($clase)) {
        echo "<p class='error'>* Inrgese el Id de la clase</p>";
    } else {
        if (!is_numeric($clase)) {
            echo "<p class='error'>* Solo puede ingresar numeros en el Id de la clase</p>";
        }
    }
}else{
    
}
