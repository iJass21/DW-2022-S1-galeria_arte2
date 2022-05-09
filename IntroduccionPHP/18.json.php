<?php include 'includes/header.php';

//Las consultas a la BDD para poder trabajarse se debe hacer conexion con otras instancias atravez de JSON
//Los objetos en JS y PHP se pueden comunicar por medio de json

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Notebook',
        'precio' => 350,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);// Arreglo de PHP. No se puede leer directamente en JS, debemos convertirlo a JSON

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);//Hay que pasarle un arreglo para que pueda convertirlo a string, no tiene sentido darle un string
//eL JSON UNESCAPED es para que tome acentos (UTF-8)

var_dump($json);// tiene la forma de un arreglo asociativo, pero php lo convirtio a string


//La API Qque construiremos mas adelante no podra leer el arreglo, pero si podra leer el string, por eso es importante el json encode

/************************** */
//El json decode es para pasar de string a arreglo

$json_array = json_decode($json);

var_dump($json_array);

echo "</pre>";


include 'includes/footer.php';