<?php

    session_start();

    if(!isset($_SESSION['email'])){
        echo '
        
            <script>
                alert ("Por favor debes iniciar sesion");
                window.location = "login_register.php";
            </script>

        ';
        session_destroy();
        die();
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
	<header class="header">
		<div class="contenedor" data-aos="fade-right">
                    <div class="btn-menu">
                        <label for="btn-menu"><img src="../IMG/descarga.png" alt="logo" class="logo"></label>
                    </div>
                <div class="logo" data-aos="fade-right">
                    <h1  id="inicio">Acero ñopez</h1>
                </div>
                <nav class="menu">
                    <a href="index.php" class="menu-enlace">Inicio</a>
                    <a href="#footer" class="menu-enlace">Acerca de</a>
                    <a href="catalogo.php" class="menu-enlace">Catalogo</a>
                    <a href="nosotros.php" class="menu-enlace">Nosotros</a>
                    <a href="contacto.php" class="menu-enlace">Contacto</a>
                </nav>
		</div>
	</header>

    <input type="checkbox" id="btn-menu">

    <div class="contenedor-menu">
        <div class="cont-menu">
            <img src="../IMG/descarga.png" alt="logo" class="logo-menu">
            <nav>
                <a href="#">Portafolio</a>
                <a href="#">Servicios</a>
                <a href="#">Suscribirse</a>
                <a href="#">Facebook</a>
                <a href="#">Youtube</a>
                <a href="cerrar-sesion.php">Cerrar Sesion</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>

  
    <main class="contenedor-catalogo">
        <h1 class="productos">Nuestros Productos</h1>

        <div class="grid">
            <div class="producto" data-aos="fade-left">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-left">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-left">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-right">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-right">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-right">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-left">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-left">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-left">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-right">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-right">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
            <div class="producto" data-aos="fade-right">
                <a href="producto.html">
                    <img class="producto__imagen" src="../IMG/2.png" alt="imagen producto">
                    <div class="producto__informacion">
                        <p class="producto__nombre">perchero</p>
                        <p class="producto__precio">$25</p>
                    </div>
                </a>
            </div>  <!--.producto-->
        </div>
    </main>

    <footer class="pie" id="footer">
        
        <hr>
        <hr>

        <div class="contenedor-footer" data-aos="fade-up" data-aos-anchor-placement="top-bottom">

            <div class="seccion">
                <div>
                    <h2><a href="#">Inicio</a></h2>
                    <a href="#">Contac Us</a>
                </div>
                <div>
                    <h2>Productos</h2>
                    <a href="#">App Design</a>
                    <a href="#">Web Design</a>
                </div>
                <div>
                    <h2>Cuenta</h2>
                    <a href="#">Profile</a>
                    <a href="#">My Account</a> 
                </div>
                <div>
                    <h2>Courses</h2>
                    <a href="#">Html y Css</a>
                    <a href="#">JavaScript</a>
                </div>
                <div class="contenedor-formulario">
                    <h2>Suscribe</h2>
                    <form action="" class="formulario">
                        <input type="text" placeholder="Ingresa tu Correo">
                        <button type="submit">Suscribirse</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="derechos">

            <p class="derechos-reservados">Copyright©2022Informatica Studios. All right reserved</p>
            <div class="redes">
                <span class="fb"><i class="fa-brands fa-facebook"></i></span>
                <span class="in"><i class="fa-brands fa-instagram"></i></span>
                <span class="ws"><i class="fa-brands fa-whatsapp"></i></span>
                <span class="gm"><i class="fa-regular fa-envelope"></i></span>
            </div>

        </div>
    </footer>

    <script src="https://kit.fontawesome.com/7db932a7f2.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration:500
        });
    </script>

</body>
</html>