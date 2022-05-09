<?php include 'includes/header.php';

//Existen 2 tipos de arreglos, indexados y asociativos(objetos)
//Los arreglos asociativos son como el corazon de PHP, similar a un mapa

$carrito = ['Tablet', 'Television', 'radio'];
$carrito2 = array();//Otra forma de crear arreglos, son del mismo tipo

var_dump($carrito);
echo "<br/>";
echo "<br/>";

//Util para ver los contenidos de un array

echo "<pre>";//rodear un var_dump con el pre sirve mucho, porque muestra el arreglo de manera mucho mas ordenada, parecido a JSON
var_dump($carrito);
echo "</pre>";

//Para acceder a un elemento en especifico se puede acceder mediante el indice, sirve para las BDD tambien.
echo "<br/>";
var_dump($carrito[1]);
echo "<br/>";
echo $carrito[1];

//Agregar o quitar elementos del arreglo

$carrito[3] = "Nuevo producto....";//La unica desventaja de esto es que hay que saber cuantos arreglos hay al final, para darle el indice correcto

//Añadir elemento neuvo al final

array_push($carrito, 'Audifonos');//Push 

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Añadir elemento nuevo al inicio del arreglo

array_unshift($carrito, "SmartWatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Usando la otra forma de crear arreglos, no hay ninguna forma correcta de hacerlo, ambas hacen exactamente lo mismo.
$clientes = array('Cliente1','Cliente2','Cliente3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';