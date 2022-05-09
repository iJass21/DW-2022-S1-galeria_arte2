<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

//El vardump tambien sirve para comparar y devuelve in booleano
var_dump($numero1 > $numero2);
var_dump($numero1 < $numero2);
var_dump($numero1 <= $numero2);
//Comparacion
echo "<br/>";
var_dump($numero2 == $numero4); //Solo analiza valor, no analiza tipo de dato, por lo que retornara true
echo "<br/>";
var_dump($numero2 === $numero4);//Analiza valor y tipo de dato, por lo que retornara false

echo "<br/>";
var_dump($numero1 <=> $numero2); 
/**RETORNA:
 * -1 : Si el de la izquierda es mayor
 * 0: si son iguales
 * 1: si es mayor el de la derecha 
 */

include 'includes/footer.php';