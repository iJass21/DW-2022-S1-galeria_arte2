<?php include 'includes/header.php';

    //Variable se define por un signo $ al principio. Una variable no puede tener signos ni iniciar con numeros, pero si puede tenerlos al final
    $nombre = "Juan";

    $nombre = "Juan2"; //En php las variables se pueden reasignar, para declarar constantes se usa define('')
    echo $nombre;//solo imprime el valor
    var_dump($nombre);//imprime que tipo de dato es, su extencion y el valor

    define('constante', "Este es el valor de la constante");//No se imprime con echo, ya que no crea una variable, si no con un identificador, asi que se imprime sin signo de dolar
    echo constante;

    const constante2 ="Constante2";//otra forma de crear constantes.
    echo constante2;

    $Nombre_Cliente ="pedro";

include 'includes/footer.php';