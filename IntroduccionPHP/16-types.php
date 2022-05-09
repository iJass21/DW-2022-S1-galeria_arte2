<?php
declare(strict_types=1);
include 'includes/header.php';

/*Usar el declare strict types nos sirve mucho para darle consistencia y un buen typado a nuestro codigo
Pues nos marcara los errores o inconsistencias que podamos tener. Recordar tambien que un buen uso de plugins o extensiones
nos facilitara mucho el trabajo 

void: si queremos retornar un echo algo, y no un return
tambien se puede definir como : ?string -> estamos diciendo que puede retornar otra cosa, o un string.
o tambien : string|int, se le conoce como union, y indica que puede retornar ambos tipos de datos, marcara error pero funciona igual
*/


function usuarioAutenticado(bool $autenticado) : string {//Ese : sirve para indicar que tipo de dato retornara, no es obligacion. Debe definirse previamente el declare strict typas
    
    if($autenticado){
        return "El usuario esta autenticado";
    }else {
        return "Usuario no autenticado";
    }
}

$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';