<?php
    require_once("C://xampp/htdocs/Escuela/controller/clasescontroller.php");
    $obj = new clasesController();
    $obj ->delete($_GET['Id_Clase']);


?>



<?php

require_once("C://xampp/htdocs/Escuela/view/head/footer.php");

?>