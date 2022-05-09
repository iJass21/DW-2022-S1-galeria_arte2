<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado /*||*/ && $admin){
    echo "Usuario autenticado correctamente";
}else{
    echo "Usuario no autenticado, iniciar sesion";
}

//If anidados

$cliente = [
    'nombre' => 'John',
    'saldo' => 50,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br/>";echo "<br/>";
if ( empty($cliente)){
    echo "El arreglo cliente esta vacio";
}else{
    echo "El arreglo cliente no esta vacio";
}
echo "<br/>";echo "<br/>";
//Al igual que en cualquier lenguaje se puede negar la condicion
if ( !empty($cliente)){
    echo "El arreglo cliente no esta vacio";
    echo "<br/>";

    if($cliente['saldo'] > 0){
        echo "El saldo del cliente es mayor a 0";
    }else{
        echo "El cliente esta pato";
    }
}echo "<br/>";echo "<br/>";

//Else if

if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo disponible";
}else if ($cliente['informacion']['tipo'] === 'Premium'){
    echo "El cliente es Premium";
}else{
    "El cliente no es premium ni tiene saldo";
}echo "<br/>";echo "<br/>";

// Switch

$tecnologia = 'PHP';

switch($tecnologia){
    case 'PHP':
        echo "PHP, un exelenmte lenguaje!";
        break;
    case 'HTML':
        echo "No es un lenguaje de programacion jeje";
    default:
        echo "Algun lenguaje randum";
}



include 'includes/footer.php';