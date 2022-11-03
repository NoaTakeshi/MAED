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
		<div class="contenedor" data-aos="fade-right" >
                    <div class="btn-menu">
                        <label for="btn-menu"><img src="../IMG/descarga.png" alt="logo" class="logo"></label>
                    </div>
                <div class="logo" data-aos="fade-right">
                    <h1  id="inicio">Acero ñopez</h1>
                </div>
                <nav class="menu">
                    <a href="#" class="menu-enlace">Inicio</a>
                    <a href="#blog" class="menu-enlace">Blog</a>
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
  
    <div class="imagen-fondo1" >.
        <h2 class="texto-fondo" id="indice"></h2>
    </div>

    <div class="contenedor contenido-principal">

        <main class="blog" id="blog">
            <div class="slidershow middle">

                <div class="slides">
                    <input type="radio" name="r" id="r1" checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                <div class="slide s1">
                    <img src="../IMG/7.png" alt="imagen-slider">
                </div>
                <div class="slide">
                    <img src="../IMG/2.png" alt="imagen-slider">
                </div>
                <div class="slide">
                    <img src="../IMG/1.png" alt="imagen-slider">
                </div>
                <div class="slide">
                    <img src="../IMG/8.png" alt="imagen-slider">
                </div>
                <div class="slide">
                    <img src="../IMG/5.png" alt="imagen-slider">
                </div>
                </div>
        
                <div class="navigation">
                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>
                    <label for="r3" class="bar"></label>
                    <label for="r4" class="bar"></label>
                    <label for="r5" class="bar"></label>
                </div>
        </div>
                <h3>Nuestros Productos</h3>

                <article class="entrada">
                    <div class="entrada__imagen" data-aos="fade-down">
                            <img  src="../IMG/2.png" alt="imagen blog" class="imagen-blog"> 
                    </div>

                    <div class="entrada__contenido">
                        <h4 class="no-margin">PERCHEROS EN PINO DE 6 GANCHOS</h4>
                        <p>Materia prima: Pino
                        </p>
                        <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                    </div>
                </article>

                <article class="entrada">
                    <div class="entrada__imagen" data-aos="fade-up"  >
                            <img src="../IMG/1.png" alt="imagen blog"  class="imagen-blog"> 
                    </div>

                    <div class="entrada__contenido">
                        <h4 class="no-margin">PERCHEROS EN PINO DE 6 GANCHOS</h4>
                        <p>Materia prima: Pino</p>
                        <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                    </div>
                </article>

                <article class="entrada">
                    <div class="entrada__imagen" data-aos="fade-down">
                            <img  src="../IMG/8.png" alt="imagen blog" class="imagen-blog"> 
                    </div>

                    <div class="entrada__contenido">
                        <h4 class="no-margin">PERCHEROS EN PINO DE 4  GANCHOS</h4>
                        <p>Materia prima: Pino
                        </p>
                        <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                    </div>
                </article>

                <article class="entrada">
                    <div class="entrada__imagen" data-aos="fade-right">   
                            <img src="../IMG/5.png" alt="imagen blog" class="imagen-blog"> 
                    </div>

                    <div class="entrada__contenido">
                        <h4 class="no-margin">PERCHEROS DE ESPALDAR EN PINO Y ARMELLAS DE 6 GANCHOS</h4>
                        <p>Materia prima: Pino, alambre y armellas</p>
                        <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                    </div>
                </article>

                <article class="entrada">
                    <div class="entrada__imagen" data-aos="fade-left">   
                            <img src="../IMG/3.png" alt="imagen blog" class="imagen-blog"> 
                    </div>

                    <div class="entrada__contenido">
                        <h4 class="no-margin">PERCHEROS DE ESPALDAR EN PINO Y ARMELLAS DE 4 GANCHOS</h4>
                        <p>Materia prima: Pino, alambre y armellas</p>
                        <a href="entrada.html" class="boton boton--primario">Leer Entrada</a>
                    </div>
                </article>

        </main>

                <aside class="sidebar">
                    <h3>Nuestros Cursos y Talleres</h3>

                    <ul class="cursos no-padding">
                        <li class="widget-curso" data-aos="fade-left">
                            <h4 class="no-margin">Técnicas de Extracción de Café</h4>
                            <p class="widget-curso__label">Precio: 
                                <span class="widget-curso__info">Gratis</span>
                            </p>
                            <p class="widget-curso__label">Cupo: 
                                <span class="widget-curso__info">20</span>
                            </p>
                            <a href="entrada.html" class="boton boton--secundario">Más Información sobre nuestros cursos</a>
                        </li>

                        <li class="widget-curso" data-aos="fade-left">
                            <h4 class="no-margin">asdas lo lameras cesasds</h4>
                            <p class="widget-curso__label">Precio: 
                                <span class="widget-curso__info">Gratis</span>
                            </p>
                            <p class="widget-curso__label">Cup  o: 
                                <span class="widget-curso__info">20</span>
                            </p>
                            <a href="entrada.html" class="boton boton--secundario" >Más Información sobre nuestros cursos</a>
                        </li>

                        <li class="widget-curso" data-aos="fade-left">
                            <h4 class="no-margin">4 Recetas de Café para Principiantes</h4>
                            <p class="widget-curso__label">Precio: 
                                <span class="widget-curso__info">Gratis</span>
                            </p>
                            <p class="widget-curso__label">Cupo: 
                                <span class="widget-curso__info">20</span>
                            </p>
                            <a href="entrada.html" class="boton boton--secundario">Más Información sobre nuestros cursos</a>
                        </li>
                    </ul>
                </aside>
                
        </div>
    </main>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsam aliquam, provident eius fugit laboriosam dolorum et! Adipisci est quisquam aspernatur veritatis nihil quos sapiente magni obcaecati. Et, suscipit. Repellendus.</p>

    <div class="imagen-fondo2" >.</h1>
        <h2 class="texto-fondo">Queremos compartir contigo
            estos valores que nos
            permiten materializar ese
            propósito</h2>
    </div>

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