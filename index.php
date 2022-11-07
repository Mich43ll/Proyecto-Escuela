<?php
session_start();
if(isset($_REQUEST["c"])){
    session_destroy();
    header("Location: ../escuela/controller/usuarioController.php");
}
if(isset($_SESSION["s1"])){
    echo "Bienvenid@";
    echo "<a href='index.php?c=1'>cerrar Sesion</a>";
}
else
    header("Location: ../escuela/controller/usuarioController.php");
require_once("C://xampp/htdocs/Escuela/view/head/head.php");
// require_once("C://xampp/htdocs/Escuela/controller/notasController.php");
//     $obj = new notasController();
//     print_r ($obj ->show($_GET['idNotas']));


?>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>