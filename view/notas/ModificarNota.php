<?php

require_once("C://wamp64/www/Escuela/view/head/head.php");
require_once("C://wamp64/www/Escuela/controller/notasController.php");
$obj = new notasController();
$filas= $obj->index();
$nota = $obj  ->show($_GET['idNotas']);


?>


<a  href="ModificarNota.php?idNotas=<?=$fila[0] ?>"  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Modificar</a>
<div class="modal fade" id="exampleModal" tabindex="-5" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Notas del Alumno</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" >


                        <form action="update.php" method="post" autocomplete="off" class="col-auto" >


                        <div class="mb-3">
                            <label for="text" class="form-label">ID</label>
                            <input type="idAlumno" class="form-control" id="idAlumno" aria-describedby="Alumno" value="<?=$nota[0]?>">
                       
                        </div>

                

                        <div class="mb-3">
                            <label for="text" class="form-label">Nombre de Alumno</label>
                            <input type="idAlumno" class="form-control" id="idAlumno" aria-describedby="Alumno">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Maestro</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Clase</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Primer Parcial</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Segundo Parcial</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                       
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tercer Parcial</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                
                     
                        </form>
	
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>


                        </div>
                    
                        </div>
                    </div>
                    </div>




<!------>


<?php

require_once("C://wamp64/www/Escuela/view/head/footer.php");

?>