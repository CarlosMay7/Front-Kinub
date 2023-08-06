<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinub - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header">
        <div class="header__logo">
            <a href="/">Logo</a>
        </div>

        <nav class="navegacion">
            <a href="#" class="navegacion__link">Equipos</a>
            <a href="#" class="navegacion__link">Soporte técnico</a>
            <a href="#" class="navegacion__link">Certificados</a>
            <a href="#" class="navegacion__link">Contacto</a>
        </nav>
    </header>

    <section class="nosotros">
        <div class="nosotros__grid">
            <div class="nosotros__imagen-contenedor">
                <img class="nosotros__imagen" src="/src/img/taylor.jpg" alt="Perrite">
            </div>

            <div class="nosotros__contenido">
                <h2 class="nosotros__heading">Nosotros</h2>
                <p class="nosotros__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor itaque sit nesciunt nihil maiores placeat sequi recusandae earum voluptatibus accusantium modi natus dolorem, tenetur, quod reprehenderit nostrum. Error, sit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, illum saepe ab, sit iure dignissimos quasi ex eius velit cum laudantium aspernatur vitae error doloribus. Quod quibusdam doloribus aspernatur ducimus?</p>
            </div>
        </div>
    </section>

    <section class="video">
        <!--En el data-url se traerá el url de la bd-->
        <!-- <div class="video__contenedor" id="video" data-url="https://www.youtube.com/watch?v=O1wUdB7MQbI"></div> -->
        <div class="video__contenedor">
            <img src="/src/img/taylor.jpg" alt="">
        </div>
    </section>

    <section class="soluciones">
        <h2 class="soluciones__heading">Soluciones de medición</h2>

        <div class="soluciones__grid">

            <div class="solucion">
                <div class="solucion__icono">
                    <img src="src/img/gota.svg" alt="Gota">
                </div>

                <div class="solucion__contenido">
                    <h3 class="solucion__nombre">Nombre</h3>
                    <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--Solucion-->

            <div class="solucion">
                <div class="solucion__icono">
                    <img src="src/img/gota.svg" alt="Gota">
                </div>

                <div class="solucion__contenido">
                    <h3 class="solucion__nombre">Nombre</h3>
                    <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--Solucion-->

            <div class="solucion">
                <div class="solucion__icono">
                    <img src="src/img/gota.svg" alt="Gota">
                </div>

                <div class="solucion__contenido">
                    <h3 class="solucion__nombre">Nombre</h3>
                    <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--Solucion-->

            <div class="solucion">
                <div class="solucion__icono">
                    <img src="src/img/gota.svg" alt="Gota">
                </div>

                <div class="solucion__contenido">
                    <h3 class="solucion__nombre">Nombre</h3>
                    <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div> <!--Solucion-->
        </div>
    </section>
    
    <footer class="footer">
        <div class="footer__grid">
            <a href="#" class="footer__link">Aviso de privacidad</a>

            <div class="redes">
                <div class="red">
                <a class="redes__link" href="https://facebook.com"><span class="redes__accesible">Facebook</span></a>
                <a class="redes__link" href="https://facebook.com"><span class="redes__accesible">Facebook</span></a>
                <a class="redes__link" href="https://facebook.com"><span class="redes__accesible">Facebook</span></a>
                <a class="redes__link" href="https://facebook.com"><span class="redes__accesible">Facebook</span></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="/youtube.js"></script>
</body>

</html>