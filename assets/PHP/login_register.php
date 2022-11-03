<?php

    session_start();

    if(isset($_SESSION['email'])){
        header ("location: bienvenida.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login_register.css">
    <title>Login and register | MAED</title>
</head>
<body>
    
            <main>
            
                <div class="contenedor__todo">
                    <div class="caja__trasera">
                        <div class="caja__trasera-login">
                            <h3>¿Ya tienes una cuenta?</h3>
                            <p>Inicia sesión para entrar en la página</p>
                            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                        </div>
                        <div class="caja__trasera-register">
                            <h3>¿Aún no tienes una cuenta?</h3>
                            <p>Regístrate para que puedas iniciar sesión</p>
                            <button id="btn__registrarse">Regístrarse</button>
                        </div>
                    </div>
            
                    <!--Formulario de Login y registro-->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="login_usuario.php" method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="email" placeholder="Correo Electronico" name="email">
                            <input type="password" placeholder="Contraseña" name="pass1">
                            <button>Entrar</button>
                        </form>
            
                        <!--Register-->
                        <form action="registro_usuario.php"  method="POST" class="formulario__register">
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre completo" name="nombre">
                            <input type="email" placeholder="Correo Electronico" name="email">
                            <input type="password" placeholder="Contraseña" name="pass1">
                            <!--<input type="password" placeholder="Confirmar Contraseña" name="pass2">-->
                            <input type="checkbox" id="terms"><label for=""> Acepta los <a href="">Terminos</a> y <a href="">Condiciones</a> de <a href="../../index.html">MAED</a>.</label>
                            <button>Regístrarse</button>
                        </form>
                    </div>
                </div>
            
            </main>
            
            <script src="../JS/login_register.js"></script>
    
</body>
</html>