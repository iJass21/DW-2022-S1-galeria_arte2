<?php

    include_once ('header.php');

    $collection_users = $client->galeria->users;
    $users = $collection_users->find(array('email' => $_POST['email']));

    print_r($_POST);
    echo"<br/>";

    foreach($users as $user){
        var_dump($user);
    }

    if(isset($user)){
        echo "Correo ya registrado";
    }else{
        $result = $collection_users->insertOne(['email' => $_POST['email'],
                                                   'nombre' => $_POST['nombre'],
                                                   'password' => $_POST['password'],
                                                    'apellido' => $_POST['apellido'], ]);

        var_dump($result);
        echo "Registro exitoso, porfavor ingresa";
        header('Location: ingresar.php?login=true');
    }


    include_once('footer.php');

?>