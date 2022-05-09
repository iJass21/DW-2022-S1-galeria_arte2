<?php include 'includes/header.php';

//Arreglo asociativo es el equivalente a un objeto, en vez de acceder a ellos mediante un indice, se accede mediante una propiedad

$cliente = [
    'nombre' => 'Juan',
    'Saldo' => 200,
    //Un arreglo de este tipo puede contener dentro de si mas arreglos.
    'informacion' => [
        'tipo' => 'Premium',
        'disponible' => 100
    ]
];

echo "<pre>";//A esto se le conoce como un snipped
var_dump($cliente);
echo "</pre>";//El pre automaticamente le da un br

//Para acceder a alguna propiedad de el ya no se puede usar indice, tirara error, se asi con la propiedad qeu queremos

echo "<pre>";//A esto se le conoce como un snipped
var_dump($cliente['nombre']);
echo "</pre>";

//vardump es muy util para ver toda la informacion del contenido, pero si solo queremos lo que contiene y no la info usamos echo
echo $cliente['nombre'];

//Como acceder a informacion? pues es un array dentro de un array.
echo "<br/>";
echo "<br/>";
echo $cliente['informacion']['tipo'];

echo "<pre>";//A esto se le conoce como un snipped
var_dump($cliente['informacion']);
echo "</pre>";

echo $cliente['informacion']['disponible'];

//COMO AGREGAR ELEMENTOS AL ARRAY

$cliente['codigo'] = 15429521;
//$cliente['nombre'] = "luis";

//Si la propiedad que agregamos no existe, entonces se agrega dentro del arreglo, pero si ya existe, se sobrescribe el valor

echo "<pre>";//Snipped
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';