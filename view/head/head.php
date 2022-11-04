<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <div class="container-fluid bg-dark p-2 mb-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Escuela</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/escuela/index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alumnos</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="#">Lista de Alumnos</a>
          </li>
            <li>
              <a class="dropdown-item" href="/escuela/view/alumnos/index.php">Ingresar Alumno</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Empleados</a>
          <ul class="dropdown-menu dropdown-menu-dark">
          <li>
            <a class="dropdown-item" href="/escuela/view/empleados/showEmpl.php">Lista de Empleados</a>
          </li>
            <li>
              <a class="dropdown-item" href="/escuela/view/empleados/index.php">Ingresar Empleados</a>
            </li>
          </ul>
        </li>

          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Control de Notas
          </a>

  <!---Lista de Notas Menu-->      
          <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="/escuela/view/notas/index.php">Notas del Alumno</a></li>
            <li><a class="dropdown-item" href="/escuela/view/notas/IngresarNota.php">Ingresar Nueva Nota</a></li>
            <li><a class="dropdown-item" href="/escuela/view/notas/Ingresar.php">Ingresar Nueva prueba</a></li>
            <li><a class="dropdown-item" href="#">Modifcar Nota</a></li>
            <li><a class="dropdown-item" href="#">Eliminar Nota</a></li>
          </ul>
        </li>


      </ul>
    </div>
  </div>
</nav>

</div>


<div class="container-fluid">
</br>