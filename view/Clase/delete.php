<?php
    require_once("C://wamp64/www/Escuela/controller/clasescontroller.php");
    $obj = new clasesController();
    $obj ->delete($_GET['idClase']);


?>



<?php

require_once("C://wamp64/www/Escuela/view/head/footer.php");

?>