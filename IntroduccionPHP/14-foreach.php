<?php include 'includes/header.php';

//For each: diseñado para recorrer arreglos ( igual se puede con el while, pero es recomendable el for each)

$clientes = array('Pedro', 'Juan', 'Karen');

//debemos crearle un alias (variable), en cada uno de los elementos, tantas veces como elementos hayan
//Se recomienda darle el mismo nombre que el arreglo pero en singular

foreach($clientes as $cliente){
    echo $cliente . '<br/>';
}

//usando la otra sintaxis
foreach($clientes as $cliente):
    echo $cliente . '<br/>';
endforeach;

//Si quisieramos iterarlo por for loop primero debemos saber el largo del arreglo
//Dos formas de hacerlo y obtener el mismo resultado

echo count($clientes);echo '<br/>';
echo sizeof($clientes);echo '<br/>';

//Ahora, asi se haria con un for loop

for ( $i = 0; $i< count($clientes); $i++){
    echo $clientes[$i]. '<br/>';
}echo '<br/>';echo '<br/>';

/***************************************************************** */

//Pero el foreach fue creado apra arreglos asociativos, entocnes

$clientes = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

//IMPORTANTE!
//Entonces en un arreglo asociativo, la iteracion es sobre los valores, no sobre las llaves del objeto

foreach($clientes as $valor):
    echo $valor . '<br/>';
endforeach;
echo '<br/>';echo '<br/>';
//Si quisieramos tambien mostrar el nombre de las llaves del objeto se hace de la sgte manera

foreach($clientes as $key => $valor):
    echo $key . ' - ' . $valor . '<br/>';
endforeach;

//Esto serviria por ejemplo en bdd para traer el nombre de los campos.

//Entonces conviene mucho mas en este caso usar un foreach para arreglos asociativos.

/************************************************************* */
//Foreach ejemplo avanzado

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Notebook',
        'precio' => 350,
        'disponible' => false
    ]
];

echo "<hr/>";echo "<hr/>";

foreach($productos as $producto){
    echo "<pre>";
    var_dump(($producto));
    echo "</pre>";
}echo "<br/>";echo "<hr/>";

/**************Ahora, accederemos por atributo para listarlo***************** */

foreach($productos as $producto){ ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo "$ " . $producto['precio']; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible' ?> </p>
        <!-----ESTA LINEA SE DICE QUE ES UN OPERADOR TERNARIO, HACE EXACTAMENTE LO MISMO QUE EL IF DE ABAJO PERO EN SOLO UNA LINEA---->
        <?php
            if($producto['disponible']){
                echo "<p>Disponible</p>";
            }else{
                echo "<p> No Disponible</p>";
            }
        ?>

    </li>
<?php
/*
    echo "<pre>";
    var_dump(($producto));
    echo "</pre>";*/
}



include 'includes/footer.php';