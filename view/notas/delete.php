<?php
    require_once("C://wamp64/www/Escuela/controller/notasController.php");
    $obj = new notasController();
    $obj ->delete($_GET['idNotas']);


?>



<?php

require_once("C://wamp64/www/Escuela/view/head/footer.php");

?>