<?php include 'includes/header.php';
//loops: para ejecutar codigos cierta cantidad de veces.

//While: usualmente para recorrer bases de datos

$i = 0;//iniciador

while($i < 10){
    echo $i . "<br/>";
    $i++;
}

//otra forma de escribir un while si es que se torna tedioso el tema de las llaves o hay mucha confucion:
//o usar braket pair colorizer

while($i < 10):
    echo $i . "<br/>";
    $i++;
endwhile;

//Esta notacion tanbien sirve para el for.


//Do while: Primero ejecuta el codigo y despues lo evalua

$i= 0;
echo "<br/>";echo "<br/>";
do{
    echo $i . "<br/>";
    $i++;
}while($i < 10);echo "<br/>";echo "<br/>";

//for loop

for($i = 0; $i<10; $i++){
    echo $i . "<br/>";
}echo "<br/>";echo "<br/>";

//Ejercicio Fizz Bzz

/** Multiplo de 
 * 3 imprimir Fizz
 *  5 Imprimir Buzz
 * 3 y 5 yprimir FIZZ BUZZ
 

for ($i = 1; $i < 100; $i++ ){
    if( $i % 3 === 0 && $i % 5 === 0){
        echo $i . " - FIZZ BUZZ <br/>";
    }else if($i % 3 === 0){
        echo $i . " - Fizz <br/>";
    }else if($i % 5 === 0){
        echo $i . " - Buzz <br/>";
    }else{
        echo $i . "<br/>";
    }

}
*/



include 'includes/footer.php';