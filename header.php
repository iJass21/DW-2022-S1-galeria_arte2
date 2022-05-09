<?php
  session_start();

  require 'vendor/autoload.php';
  $client = new MongoDB\Client("mongodb://localhost:27017");

?>


<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <title>Galeria de arte</title>


  <!-- Hojas de estilos  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/normaliza.css">

  </head>

<body>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="/img/arte.ico" class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
          <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> -->
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Inicio</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <div class="text-end">
          <a href="ingresar.php" class="btn btn-outline-light me-2">Ingresar</a>
          <a href="registrar.php" class="btn btn-warning">Registrar</a>
        </div>
      </div>
    </div>
  </header>
