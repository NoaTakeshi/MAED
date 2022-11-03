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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    	<header class="header">
		<div class="contenedor" data-aos="fade-right" >
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
    <div class="imagen-fondo3" >.
        <h2 class="texto-fondo" id="indice">Nosotros</h2>
    </div>
  
    <div class="contenedor-nosotros">
        <div class="titulo-contenido">
            <h3>¿QUIENES SOMOS?</h3>
            <p> Somos una familia emprendedora, con experiencia de mas de ocho
                (8) años en la fabricación de artesanías hechas a mano en todo tipo
                de madera.
                Nos adaptados a las exigencias y al gusto de nuestros clientes, por
                ello, contamos con técnicas de fabricación tradicionales y modernas
                con lo cual podemos garantizar la calidad y durabilidad en todos
                nuestros productos.
                Hemos logrado comercializar con gran éxito a nivel local y nacional,
                obteniendo una gran acogida; y por ello hemos acogido la calidad e
                innovación como los pilares principales en todo nuestro proceso de
                producción y así lograr el posicionamiento de nuestra marca.
            </p>
        </div>
        <div class="titulo-contenido" data-aos="fade-left">
           <img src="../IMG/1.png" alt="imagen" class="imagen-nosotros">
        </div>
        <!--fin-->
        <div class="titulo-contenido" data-aos="fade-up-right">
            <img src="../IMG/1.png" alt="imagen" class="imagen-nosotros">
         </div>
        <div class="titulo-contenido">
            <h3>NUESTRA VISIÓN</h3>
            <p>Ser una empresa líder en producción y comercialización de artesanías
                en madera, Siendo reconocida nacionalmente por la calidad y fino
                acabado de nuestros productos; garantizando la satisfacción de
                nuestros clientes, mediante el desarrollo de piezas de artesanía
                hechas a mano con calidad y responsabilidad social.</p>
        </div>
        <!--fin-->
        <div class="titulo-contenido">
            <h3>NUESTRA MISIÓN</h3>
            <p>Somos una familia emprendedora, que fabrica y comercializa
                artesanías hechas a mano, en todo tipo de madera; buscamos dar a
                conocer nuestros productos a nivel nacional, obteniendo una gran
                acogida y al mismo tiempo crear oportunidades de crecimiento
                sostenible para nuestro negocio.
                </p>
        </div>
        <div class="titulo-contenido"  data-aos="fade-down-left">
           <img src="../IMG/1.png" alt="imagen" class="imagen-nosotros">
        </div>
        <!--fin-->
        <div class="titulo-contenido" data-aos="zoom-in">
            <h3>Queremos compartir contigo
                estos valores que nos
                permiten materializar ese
                propósito</h3>
         </div>
        <div class="titulo-contenido" >
          <div class="contenedor-lista"  data-aos="zoom-out-up">
            <ul class="lista">
                <li>Seamos un Equipo</li>
                <li>El cliente es Primero</li>
                <li>Pensamos en Grande</li>
                <li>Actuamos con compromiso</li>
                <li>Producimos con Calidad.</li>
               </ul>
          </div>
        </div>
        <!--fin-->
    </div>
    <!-- <div class="contenedor-contenido">
        <div class="nosotros-texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur reprehenderit cupiditate ipsam provident accusamus totam accusantium minus suscipit quidem quaerat temporibus, maiores architecto omnis ratione odio ea! Maxime, ipsum?</p>
        </div>
        <div class="contenedor-imagen">
            <img src="img/2.png" alt="imagen" class="imagen-nosotros">
        </div>
        <div class="nosotros-texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur reprehenderit cupiditate ipsam provident accusamus totam accusantium minus suscipit quidem quaerat temporibus, maiores architecto omnis ratione odio ea! Maxime, ipsum?</p>
        </div>
        <div class="contenedor-imagen">
            <img src="img/2.png" alt="imagen" class="imagen-nosotros">
        </div>
        <div class="nosotros-texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur reprehenderit cupiditate ipsam provident accusamus totam accusantium minus suscipit quidem quaerat temporibus, maiores architecto omnis ratione odio ea! Maxime, ipsum?</p>
        </div>
        <div class="contenedor-imagen">
            <img src="img/2.png" alt="imagen" class="imagen-nosotros">
        </div>
    </div>
    <div class="contenedor-contenido">
        <div class="nosotros-texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur reprehenderit cupiditate ipsam provident accusamus totam accusantium minus suscipit quidem quaerat temporibus, maiores architecto omnis ratione odio ea! Maxime, ipsum?</p>
        </div>
        <div class="contenedor-imagen">
            <img src="img/2.png" alt="imagen" class="imagen-nosotros">
        </div>
        <div class="nosotros-texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur reprehenderit cupiditate ipsam provident accusamus totam accusantium minus suscipit quidem quaerat temporibus, maiores architecto omnis ratione odio ea! Maxime, ipsum?</p>
        </div>
        <div class="contenedor-imagen">
            <img src="img/2.png" alt="imagen" class="imagen-nosotros">
        </div>
        <div class="nosotros-texto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tenetur reprehenderit cupiditate ipsam provident accusamus totam accusantium minus suscipit quidem quaerat temporibus, maiores architecto omnis ratione odio ea! Maxime, ipsum?</p>
        </div>
        <div class="contenedor-imagen">
            <img src="img/2.png" alt="imagen" class="imagen-nosotros">
        </div>
    </div> -->
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
                    <a href="#">App Dessign</a>
                    <a href="#">Wseb Design</a>
                </div>
                <div>
                    <h2>Cuenta</h2>
                    <a href="#">Profisle</a>
                    <a href="#">My Accsount</a> 
                </div>
                <div>
                    <h2>Contenido</h2>
                    <a href="#">Htmlss y Css</a>
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