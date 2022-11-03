<?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: bienvenido.php");
        exit;
    }

    
    require_once "conexion.php";

    $email = $pass1 = "";
    $email_err = $pass1_err = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor ingrese un correo electronico";
        }else{
            $email = trim($_POST["email"]);
        }

        
        if(empty(trim($_POST["pass1"]))){
            $pass1_err = "Por favor ingrese una contraseña";
        }else{
            $pass1 = trim($_POST["pass1"]);
        }



         if(empty($email_err) && empty ($pass1_err)){

            $sql = "SELECT id, usuario, email, clave FROM usuarios WHERE email = ?";

            if($stmt = mysqli_prepare($link, $sql)){

                mysqli_stmt_bind_param($stmt, "s", $param_email);



                $param_email = $email;

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                }

                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if (password_verify($pass1, $hashed_password)){
                            session_start();


                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            header("location: bienvenido.php");

                        }else{
                            $pass1_err = "La contraseña que has introducido no es valida";
                        }
                        
                    }
                }else{
                    $email_err = "No se a encontrado una cuenta con este correo electronico";
                }    
            
            } else{
                echo "Ups! Algo salio mal itentalo de nuevo mas tarde";            
            }      
        }

        mysqli_close($link);
    }

    
 
?>