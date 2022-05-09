<?php
include_once('header.php');
?>


<main class="form-signin contenedor">
    <div >

    <?php
      if(isset($_GET['login'])){?>

        <h3 class="msg-registro">Registro correcto, porfavor ingresa!</h3>

        <?php } ?>

    <form action="checklogin.php" method="POST">
        <img class="mb-4" src="/img/arte.ico" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Te extrañamos! Bienvenido</h1>

        <div class="form-floating">
          <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Correo Electronico</label>
        </div>
        <div class="form-floating">
          <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Contraseña</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
    </form>

    </div>
 
</main>



<?php
include_once('footer.php');
?>