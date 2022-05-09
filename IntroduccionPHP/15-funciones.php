<?php 
declare(strict_types = 1);// Sirve para qeu cuando queramos llamar una funcion y estemos pasando parametros de otro tipo no nos deje
include 'includes/header.php';

//Creando funciones


function sumar(int $numero1 = 0,int $numero2 = 0){//Definirlas aca sirve para en caso de no pasarle algun parametro, no se va a caer la pag
    echo $numero1 + $numero2;
}

sumar(10, 30);
echo "<br/>";
sumar(-10, 30);
echo "<br/>";

//sumar(10, 'Holi');//Nos marca un error en el Holi, pues no es int, como lo deberia ser.
//sumar(20,"20"); //tambien tira error, pues el 20 se estaria pasando como string
//Tambien es bueno indicar que tipo de parametro sera el que se recibe, asi tiene mas consistencia y podemos safar de algun error

//Existe algo que se llama "Parametros nombrados", sirve para pasar parametros pero en distinto orden.
/* Ejemplo: En nuestra funcion el primer parametro es numero1 y el segundo es numero2, pero podriamoas hacer esto: */

//sumar(numero2: 10, numero1: 20);//No soportado en php 6 o 7



include 'includes/footer.php';