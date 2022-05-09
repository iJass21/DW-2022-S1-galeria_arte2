<?php

    include_once('header.php');

    $collection_users = $client->galeria->users;
    $users = $collection_users->find(array('email' => $_POST['email']));

    var_dump($_POST);

    foreach($users as $user){
        var_dump($user);
    }

    // echo "<hr/>";

    // echo $user->password;
    // echo $_POST['password'];
    // echo isset($user->password);
    // var_dump($user->password);

    // echo "<hr/>";

    // echo strlen($user->password);
    // echo strlen($_POST['password']);

    if(($user->password == $_POST['password']) && (strlen($_POST['password']) != 0)){
        echo "Login Correcto";

        $_SESSION['email'] = $user['email'];
        $_SESSION['nombre'] = $user['nombre'];

        var_dump($_SESSION['email']);
        var_dump($_SESSION['nombre']);

        header('Location: main.php');
    }else{
        echo "Login incorrecto";
    }


?>