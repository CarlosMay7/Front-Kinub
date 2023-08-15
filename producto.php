<?php 
    include_once __DIR__."/templates/header.php";
    include_once __DIR__."/templates/hero.php";
?>

<main class="presentacion presentacion__contenedor">
    <div class="presentacion__grid">
        <div class="presentacion__carrusel">
            <img src="/src/img/taylor.jpg" alt="">
        </div>

        <div class="presentacion__datos">
            <h2 class="presentacion__heading">Nombre del producto</h2>
            <!--Tags-->
            <p class="presentacion__informacion"><span>Titulo:</span>Descripcion</p>
            <p class="presentacion__informacion"><span>Titulo:</span>Descripcion</p>
            <p class="presentacion__informacion"><span>Titulo:</span>Descripcion</p>
            <p class="presentacion__informacion"><span>Titulo:</span>Descripcion</p>
            <a href="#" class="presentacion__boton">Más información acerca de este equipo</a>
        </div>
    </div>
</main>

<nav class="nav-producto">
    <a href="#" class="nav-producto__enlace">Descripción</a>
    <a href="#" class="nav-producto__enlace">Especificaciones técnicas</a>
    <a href="#" class="nav-producto__enlace">Área de descarga</a>
</nav>

<section class="descripcion descripcion__contenedor">
    <h2 class="descripcion__heading">Descripción</h2>
    <div class="descripcion__texto-contenedor">
        <p class="descripcion__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus magni pariatur vero doloremque, id ipsa praesentium a nesciunt! Ullam, porro laudantium. Voluptas fugit possimus vero explicabo rerum id omnis nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum alias praesentium explicabo, nesciunt expedita ducimus dolor a, id maxime quasi, cum culpa tempora quibusdam et. Rerum itaque soluta quo suscipit.</p>
    </div>
</section>

<section class="especificaciones especificaciones__contenedor">
    <h2 class="especificaciones__heading">Especificaciones Técnicas</h2>
    <div class="especificaciones__texto-contenedor">
        <p class="especificaciones__texto"><span>Titulo:</span>Datos</p>
        <p class="especificaciones__texto"><span>Titulo:</span>Datos</p>
        <p class="especificaciones__texto"><span>Titulo:</span>Datos</p>
    </div>
</section>

<?php 
    include_once __DIR__."/templates/video.php";
?>

<section class="descarga descarga__contenedor">
    <h2 class="descarga__heading">Área de descarga</h2>

    <div class="descarga__acordion-contenedor">
        <div class="accordion accordion-flush" id="area-descarga">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordion-1" aria-expanded="false" aria-controls="acordion-1">
                        Brochure
                    </button>
                </h2>
                <div id="acordion-1" class="accordion-collapse collapse" data-bs-parent="#area-descarga">
                    <ul class="descarga__lista">
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordion-2" aria-expanded="false" aria-controls="acordion-2">
                        Datasheet
                    </button>
                </h2>
                <div id="acordion-2" class="accordion-collapse collapse" data-bs-parent="#area-descarga">
                    <ul class="descarga__lista">
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordion-3" aria-expanded="false" aria-controls="acordion-3">
                        Manual de usuario
                    </button>
                </h2>
                <div id="acordion-3" class="accordion-collapse collapse" data-bs-parent="#area-descarga">
                    <ul class="descarga__lista">
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                    </ul>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordion-4" aria-expanded="false" aria-controls="acordion-4">
                        Certificados
                    </button>
                </h2>
                <div id="acordion-4" class="accordion-collapse collapse" data-bs-parent="#area-descarga">
                    <ul class="descarga__lista">
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                        <li><a href="/archivoTexto.txt" download>Descarga</a></li>
                    </ul>
                </div>
            </div>

        </div> 
    </div>
</section>

<?php 
    include_once __DIR__."/templates/footer.php";
?>