<?php include 'includes/header.php';//Si falla tirar un warning, eventualmente el codigo puede seguir ejecutandose

//Include: incluye otros archivos con el fin de reutilizar el codigo, sirve mucho para los header y footers, en caso de querer
//hacer algun cambio, no hanra que modificar muchas paginas, solo el header. Hay que pasarle la ruta al documento.

require 'includes/header.php';//Funciona exactamente igual que el include. Este si pilla error va a dejar de ejecutar el codigo

/*=> ¿Cuando usar include o require?
    - Usar require cuando tengamos funciones criticas para la aplicacion, como por ejemplo una conexion al servidor o BDD
    - Usar include cuando queramos incluir otros templates, de esa forma, en caso de que falle, puede seguir ejecutandose la aplicacion 
        pero sin algunas piezas por ejemplo. Dependiendo de la configuracion se puede seguir ejecutando
        
        require_once 'includes/header.php'; //Es lo mismo que el require pero revisa si ya se incluyo antes, si ya esta no lo incluye

        Se recomienda entonces tener una carpeta de includes y funciones, donde podamos llamar al archivo de la funcion y ahorrar codigo.
        */

include 'includes/footer.php';