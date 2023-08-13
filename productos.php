<?php
    include_once __DIR__."/templates/header.php";
?>

    <div class="productos__hero">
        <h1 class="productos__heading">Catálogo</h1>
    </div>

<main class="productos productos__contenedor">
    
    <form class="busqueda">
        <div class="busqueda__campo--nombre">
            <input class="busqueda__nombre" type="text" placeholder="Ingrese el nombre del producto" id="nombre">
        </div>

        <div class="busqueda__botones">
            <a class="busqueda__boton" data-bs-toggle="collapse" href="#tags" role="button" aria-expanded="false" aria-controls="tags">Seleccione tags</a>
            <a class="busqueda__boton" data-bs-toggle="collapse" href="#categorias" role="button" aria-expanded="false" aria-controls="categorias">Seleccione una categoria</a>
        </div>

        <div class="busqueda__desplegables" >
            
            <div class="busqueda__elemento">
                <div class="busqueda__checkboxes collapse multi-collapse" id="tags">
                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="tag1">Tag 1</label>
                        <input class="busqueda__checkbox" type="checkbox" id="tag1" name="tags" value="tag1">
                    </div>

                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="tag2">Tag 2</label>
                        <input class="busqueda__checkbox" type="checkbox" id="tag2" name="tags" value="tag2">
                    </div>

                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="tag3">Tag 3</label>
                        <input class="busqueda__checkbox" type="checkbox" id="tag3" name="tags" value="tag3">
                    </div>

                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="tag4">Tag 4</label>
                        <input class="busqueda__checkbox" type="checkbox" id="tag4" name="tags" value="tag4">
                    </div>
                </div>
            </div>

            <div class="busqueda__elemento">
                <div class="busqueda__radios collapse multi-collapse" id="categorias">
                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="cat1">Categoria 1</label>
                        <input class="busqueda__radio" type="radio" id="cat1" name="categorias" value="cat1">
                    </div>

                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="cat2">Categoria 2</label>
                        <input class="busqueda__radio" type="radio" id="cat2" name="categorias" value="cat2">
                    </div>

                    <div class="busqueda__campo">
                        <label class="busqueda__label" for="cat3">Categoria 3</label>
                        <input class="busqueda__radio" type="radio" id="cat3" name="categorias" value="cat3">
                    </div>
                </div>
            </div>
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