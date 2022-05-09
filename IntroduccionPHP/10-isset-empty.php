<?php include 'includes/header.php';

$clientes = [
    'nombre' => 'Splinter',
    'edad' => 25
];
$clientes2 = array();
$clientes3 = array('Pendro', 'Juan', 'Karen');

// Empty - revisa si un arreglo esta vacio

var_dump( empty($clientes2));//Retorna si un arregla esta vacio o no, true si esta vacio, false si no
echo "<br/>";
var_dump( empty($clientes3));
echo "<br/>";

// Isset - Revisa si un arreglo esta creado o una propiedad esta definida

var_dump((isset($clientes4)));//True si existe o esta definido, False si no.
echo "<br/>";
var_dump((isset($clientes2)));//Aunque este vacio, igual retorna el true, pues solo revisa si existe el arreglo o no
echo "<br/>";

//Tambien se puede usar para ver si una propiedad existe
var_dump( (isset($clientes['nombre'])) );//true
echo "<br/>";
var_dump( (isset($clientes['codigo'])) );//false


include 'includes/footer.php';