<?php
    require_once("C://wamp64/www/Escuela/controller/matriculascontroller.php");
    $obj = new matriculasController();
    $obj->delete($_GET['idMatricula']);


?>



<?php

require_once("C://wamp64/www/Escuela/view/head/footer.php");

?>