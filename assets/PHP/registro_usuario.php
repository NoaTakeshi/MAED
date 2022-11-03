<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    //$pass1 = password_hash($pass1, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios(usuario, email, clave) 
            VALUES('$nombre', '$email', '$pass1')";

            //VERIFICAR QUE EL CORREO NO SE REPITA

          $verificar_email = mysqli_query($link, "SELECT * FROM usuarios WHERE email='$email'");

          if(mysqli_num_rows($verificar_email) > 0){
            header ("location: login_register.php");
            exit();
          }

      $ejecutar = mysqli_query( $link, $query);      

      if($ejecutar){
        header ("location: login_register.php");
      }else{
        header ("location: login_register.php");
      }
      mysqli_close($link);
?>