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
            <svg xmlns="http://www.w3.org/2000/svg" height="60" fill="#53d4ff" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg>
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
            <textarea id="mensaje" rows="5" class="formulario__textarea"></textarea>
        </div>

        <div class="formulario__submit">
            <input type="submit" value="Enviar">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-send-fill" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
            </svg>
        </div>
    </form>
</section>

<?php 
include_once __DIR__.'/templates/footer.php';
?>
