<?php

include_once('header.php');

?>



  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Bienvenidos a la galeria de arte mas grande de Chile</h1>
        <p class="lead">En esta galeria podras compartir tu arte con otras personas, ademas de vender y comprar obras al mejor precio.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="/registrar.php" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Comienza a inspirarte!</a>
          <a href="/ingresar.php" class="btn btn-outline-secondary btn-lg px-4">Ya tienes cuenta?</a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3 img-hero" src="/img/hero2.jpg" alt="hero">
      </div>
    </div>
  </div>


  <?php

include_once('footer.php');

?>