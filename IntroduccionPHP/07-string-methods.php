<?php include 'includes/header.php';

$nombreCliente ="Johnaldo de Asis";

//Conocer extencion de un string

echo strlen($nombreCliente);//Devuelve el largo de la cadena, cantidad de caracteres. Los espacios tambien cuentan.
echo "<br/>";
var_dump($nombreCliente);//Var_dump tambien devuelve el largo de la cadena. Sirve por ejemplo para validar un formulario y ver que 
//usuario no haya completado menos de cierta cantidad de caracteres por ejemplo. O por ejemplo para un limite de caracteres

/*Eliminar espacios en blanco: Con el fin de eliminar basura, en caso de que el usuario haya guardado su nombre y nos
llene con basura la BDD*/

/**Sirve mucho esto por ejemplo para validar los correos electronicos, ya que si alguien agrega un espacio al inicio
 * o al final del correo sera un usuario distinto */

$nombre2 = "       John  ";
echo "<br/>";
echo strlen($nombre2);

$texto = trim($nombre2);//Elimina los espacios en blanco
echo "<br/>";
echo $texto;
echo "<br/>";
echo strlen($texto);
echo "<br/>";echo "<br/>";

//Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br/>";
//Convertir a minusculas
echo strtolower($nombreCliente);
//Esto se puede hacer con css, pero la gracia de hacerlo con un lenguaje de programacion, pero aca podemos prevenir esto:

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";//este tiene la primera C mayuscula, eso lo hara distinto

//Al hacer una consulta en la BDD, estos correos seran distintos. por eso es importante trabajar con ellos antes de registrarlos
echo "<br/>";
var_dump($mail1 === $mail2);//Retorna False
echo "<br/>";
var_dump(strtolower($mail1) === strtolower($mail2));//Aca si retorna el true. Aca si es que se utilizara. Ahora estos 2 correos son iguales
/*Entonces para pasar un texto a mayus o minus en la pag es mejor hacerlo con CSS y no cargar al servidor, Pero para este tipo
de cosas es importante haceerlo aca*/

//REEMPLAZANDO CADENA O CARACTER
echo "<br/>";
echo str_replace('Johnaldo','J', $nombreCliente);//('Cadena o parametro a reemplazas','nuevo texto o caracter', $variable)
//ojo que no nombran consistentemente sus funciones, por ejemplo strtolower, strtouppercase y str_replace son funciones
//de la misma famila, pero una estan con _ y otras no, eso le da un poco de mala fama, pero eso no lo hace un mal lenguaje.


//Revisar si un string existe o no
echo "<br/>";
//echo $nombreCliente; //El str_replace de arriba no modifico la variable, solo la imprimio con el reemplazo., para que quede guardado hay que hacerlo en una nueva variable
echo strpos($nombreCliente, 'John');//Retorna la posicion en la que se encuentra la cadena, si no hay nada no imprime nada
//Si hubiera espacios los cuenta.
echo strpos($nombreCliente, 'Juan');

//Template strings

$tipoCliente = "Premium";
echo "<br/>";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;//El punto sirve para concatenar, si no se pone el punto tira error.
echo "<br/>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";// Otra forma de concatenar.
//Esta ultima solo funciona con comillas dobles "", si ponemos comillas sensillas '', no funciona 


include 'includes/footer.php';