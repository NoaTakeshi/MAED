<?php

    session_start();


    include 'conexion.php';

    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];

    //$pass1 = password_hash($pass1, PASSWORD_DEFAULT);


    $validar_login = mysqli_query($link, "SELECT * FROM usuarios WHERE email='$email'
    and clave='$pass1'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['email'] = $email;
        header("location: bienvenida.php");
        exit;
    }else{
        header ("location: login_register.php");
        exit;
    }

?>