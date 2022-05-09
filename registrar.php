<?php
include_once('header.php');
?>

<div class="hero-registrar">

</div>

<div class="Contenedor-form-registrar">
    <h1>Bienvenido a nuestra comunidad de arte! Registrate para ser parte de ella!</h1>

    <form action="checkregistro.php" method="POST">
        <div class="input-group flex-nowrap margin-bottom-30px ">
            <span class="input-group-text etiqueta" id="addon-wrapping">Nombre</span>
            <input name="nombre" type="text" class="form-control" placeholder="Juan" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        
        <div class="input-group flex-nowrap margin-bottom-30px ">
            <span class="input-group-text etiqueta" id="addon-wrapping">Apellido</span>
            <input name="apellido" type="text" class="form-control" placeholder="Perez" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        
        <div class="input-group flex-nowrap margin-bottom-30px ">
            <span class="input-group-text etiqueta" id="addon-wrapping">Correo</span>
            <input name="email" type="email" class="form-control" placeholder="alguien@alguien.com" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        
        <div class="input-group flex-nowrap margin-bottom-30px ">
            <span class="input-group-text etiqueta" id="addon-wrapping">Contraseña</span>
            <input name="password" type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="addon-wrapping">
        </div>

        <div class="input-group flex-nowrap margin-bottom-30px ">
            <span class="input-group-text etiqueta" id="addon-wrapping">Repetir contraseña</span>
            <input type="password" class="form-control" placeholder="Repite tu contraseña" aria-label="Username" aria-describedby="addon-wrapping">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>

</form>


</div>





<?php
include_once('footer.php');
?>