<?php
if(isset($_POST['submit'])){
    if(empty($nombre) and empty($idCargo) and empty($direccion) and empty($telefono) and empty($estado)){
        echo "<p class='error'>* Debe Agregar Todos Los Campos*</p>";
    }
}
?>