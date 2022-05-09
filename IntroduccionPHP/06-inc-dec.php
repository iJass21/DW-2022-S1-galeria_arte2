<?php include 'includes/header.php';

$numero1 = 30;
$numero1++;

echo $numero1;
echo "<br/>";
echo $numero1++;//Esto no sirve, ya que primero imprime y luego agrega el numero.
echo "<br/>";
echo $numero1;
//Lo mismo pasa con los decrementos.

$numero1--;
$numero1+=5;//Para incrementos de valores distintos de 1, podria ocuparse en un for o algo asi.


include 'includes/footer.php';