<?php include 'includes/header.php';
//Funciones utiles 

//In_array - Para buscar elementos en un arreglo

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito));// tambien se pueden usar las funciones con echo, pero devuelve 1 o 0, es mejor usar var_dump

//Ordenar elementos de un arreglo

$numeros = array(5,4,3,6,2,1,2);

sort($numeros);//ordena de menor a mayor, no elimina los repetidos

echo "<pre>";
    var_dump($numeros);
echo "</pre>";

rsort($numeros);//de menor a mayor


/**************************************** */

//Ordenamiento arreglo asociativo

$cliente = [
    'saldo' => 599,
    'tipo' => 'Premium',
    'nombre' => 'Francis'
];

echo "<pre>";
    var_dump($cliente);
echo "</pre>";

asort($cliente);//el asort indica que es un arreglo del tipo asociativo
//ordena por los valores (orden alfabetico), no por llaves



ksort($cliente);//ordena por llaves ( orden alfabetico, pero al revez, de la Z a la A)



asort($cliente);//Primero letras y despues los numeros

include 'includes/footer.php';