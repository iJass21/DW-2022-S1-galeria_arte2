<?php

session_start();
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");

//var_dump($_POST);

echo $_POST['email'];


$collection_users = $client->galeria->users;

$users = $collection_users->find(array('email' => $_POST['email']));

foreach($users as $user){
    var_dump($user);
}

echo (isset($user));

if(isset($user)){
    echo "Correo ya registrado";
}else{
    $result = $collection_users->insertOne(['email' => $_POST['email'],
                                                   'nombre' => $_POST['nombre'],
                                                   'password' => $_POST['password'],
                                                    'apellido' => $_POST['apellido'], ]);
    var_dump($result);
    
	
                                                    
}




?>