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

<nav class="navegacion">
    <div class="navegacion__enlace">Descripción</div>
    <div class="navegacion__enlace">Especificaciones técnicas</div>
    <div class="navegacion__enlace">Área de descarga</div>
</nav>

<section class="descripcion descripcion__contenedor">
    <h2 class="descripcion__heading">Descripción</h2>
    <p class="descripcion__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus magni pariatur vero doloremque, id ipsa praesentium a nesciunt! Ullam, porro laudantium. Voluptas fugit possimus vero explicabo rerum id omnis nesciunt.</p>
</section>

<section class="especificaciones especificaciones__contenedor">
    <h2 class="especificaciones__heading">Especificaciones Técnicas</h2>
    <p class="especificaciones__texto"><span>Titulo:</span>Datos</p>
    <p class="especificaciones__texto"><span>Titulo:</span>Datos</p>
    <p class="especificaciones__texto"><span>Titulo:</span>Datos</p>
</section>

<?php 
    include_once __DIR__."/templates/video.php";
?>

<section class="descarga descarga__contenedor">
    <h2 class="descarga__heading">Área de descarga</h2>


    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Accordion Item #1
            </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
        </div>
    </div>
</section>

<?php 
    include_once __DIR__."/templates/footer.php";
?>