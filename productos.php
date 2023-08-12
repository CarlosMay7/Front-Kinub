<?php
    include_once __DIR__."/templates/header.php";
?>

    <div class="productos__hero">
        <h1 class="productos__heading">Catálogo</h1>
    </div>

<main class="productos productos__contenedor">
    
    <form class="busqueda">
        <div class="busqueda__campo--nombre">
            <input class="busqueda__nombre" type="text" placeholder="Ingrese el nombre del producto">
        </div>

        <div class="desplegable d-inline-flex gap-1">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#tags" role="button" aria-expanded="false" aria-controls="tags">
                Elige por tags
            </a>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#categorias" aria-expanded="false" aria-controls="categorias">
                Elige por categorias
            </button>
        </div>
        <!-- <div class="collapse" >
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div> -->

        <div class="busqueda__campo collapse" id="tags">
            
            <label class="busqueda__label" for="tag1">Tag 1</label>
            <input class="busqueda__checkbox" type="checkbox" id="tag1" name="tag1" value="tag1">

            <label class="busqueda__label" for="tag1">Tag 1</label>
            <input class="busqueda__checkbox" type="checkbox" id="tag1" name="tag1" value="tag1">

            <label class="busqueda__label" for="tag1">Tag 1</label>
            <input class="busqueda__checkbox" type="checkbox" id="tag1" name="tag1" value="tag1">

            <label class="busqueda__label" for="tag1">Tag 1</label>
            <input class="busqueda__checkbox" type="checkbox" id="tag1" name="tag1" value="tag1">

            <label class="busqueda__label" for="tag1">Tag 1</label>
            <input class="busqueda__checkbox" type="checkbox" id="tag1" name="tag1" value="tag1">
        </div>

        <div class="busqueda__campo collapse" id="categorias">
            
            <label class="busqueda__label" for="cat1">Categoria 1</label>
            <input class="busqueda__radio" type="radio" id="cat1" name="categorias" value="cat1">

            <label class="busqueda__label" for="cat2">Categoria 2</label>
            <input class="busqueda__radio" type="radio" id="cat2" name="categorias" value="cat2">

            <label class="busqueda__label" for="cat3">Categoria 3</label>
            <input class="busqueda__radio" type="radio" id="cat3" name="categorias" value="cat3">
        </div>
    </form>

    <div class="productos__grid">

        <div class="producto">
            <img src="" alt="" class="producto__imagen">
            <h3 class="producto__nombre">E-101</h3>
            <a href="#" class="producto__boton">Ver más</a>
        </div>

        <div class="producto">
            <img src="" alt="" class="producto__imagen">
            <h3 class="producto__nombre">E-101</h3>
            <a href="#" class="producto__boton">Ver más</a>
        </div>

        <div class="producto">
            <img src="" alt="" class="producto__imagen">
            <h3 class="producto__nombre">E-101</h3>
            <a href="#" class="producto__boton">Ver más</a>
        </div>

        <div class="producto">
            <img src="" alt="" class="producto__imagen">
            <h3 class="producto__nombre">E-101</h3>
            <a href="#" class="producto__boton">Ver más</a>
        </div>

        <div class="producto">
            <img src="" alt="" class="producto__imagen">
            <h3 class="producto__nombre">E-101</h3>
            <a href="#" class="producto__boton">Ver más</a>
        </div>

        <div class="producto">
            <img src="" alt="" class="producto__imagen">
            <h3 class="producto__nombre">E-101</h3>
            <a href="#" class="producto__boton">Ver más</a>
        </div>
    </div>

</main>

<?php
    include_once __DIR__."/templates/footer.php";
?>