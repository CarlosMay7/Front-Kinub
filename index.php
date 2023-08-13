<?php 
include_once __DIR__.'/templates/header.php';
?>

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

<?php 
include_once __DIR__.'/templates/video.php';
?>

<section class="soluciones">
    <h2 class="soluciones__heading">Soluciones de medición</h2>

    <div class="soluciones__grid">

        <div class="solucion">
            <div class="solucion__icono">
                <img src="/src/img/gota.svg" alt="Gota">
            </div>

            <div class="solucion__contenido">
                <h3 class="solucion__nombre">Nombre</h3>
                <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div> <!--Solucion-->

        <div class="solucion">
            <div class="solucion__icono">
                <img src="/src/img/gota.svg" alt="Gota">
            </div>

            <div class="solucion__contenido">
                <h3 class="solucion__nombre">Nombre</h3>
                <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div> <!--Solucion-->

        <div class="solucion">
            <div class="solucion__icono">
                <img src="/src/img/gota.svg" alt="Gota">
            </div>

            <div class="solucion__contenido">
                <h3 class="solucion__nombre">Nombre</h3>
                <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div> <!--Solucion-->

        <div class="solucion">
            <div class="solucion__icono">
                <img src="/src/img/gota.svg" alt="Gota">
            </div>

            <div class="solucion__contenido">
                <h3 class="solucion__nombre">Nombre</h3>
                <p class="solucion__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div> <!--Solucion-->
    </div>
</section>

<section id="formulario">
    <form class="contenedor-sm formulario">

        <div class="formulario__icono">
            <svg xmlns="http://www.w3.org/2000/svg" height="60px" fill="#53d4ff" viewBox="0 0 512 512"><path d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/></svg>
        </div>

        <legend class="formulario__legend">Contáctanos</legend>
        
        <div class="formulario__campo">
            <label for="nombre-producto" class="formulario__label">Nombre del Producto</label>
            <input id="nombre-producto" type="text" class="formulario__input">
        </div>

        <div class="formulario__campo">
            <label for="nombre-solicitante" class="formulario__label">Nombre del Solicitante</label>
            <input id="nombre-solicitante" type="text" class="formulario__input">
        </div>

        <div class="formulario__campo">
            <label for="correo" class="formulario__label">E-Mail</label>
            <input id="correo" type="email" class="formulario__input">
        </div>

        <div class="formulario__campo">
            <label for="mensaje" class="formulario__label">Mensaje</label>
            <textarea id="mensaje" cols="30" rows="10" class="formulario__textarea"></textarea>
        </div>
    </form>
</section>

<?php 
include_once __DIR__.'/templates/footer.php';
?>
