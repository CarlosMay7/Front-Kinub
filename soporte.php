<?php 
include_once __DIR__.'/templates/header.php';
?>

<main class="soporte">
    <h1 class="soporte__heading">Soporte Técnico</h1>

    <div class="contenedor-sm soporte__contenido">

        <div class="soporte-progreso">
            <div class="soporte-progreso__paso">
                <p class="soporte-progreso__nombre">Cliente</p>
                <div class="soporte-progreso__bullet">
                    <span class="soporte-progreso__span">1</span>
                </div>
                <div class="soporte-progreso__check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </div>
            </div>

            <div class="soporte-progreso__paso">
                <p class="soporte-progreso__nombre">Producto</p>
                <div class="soporte-progreso__bullet">
                    <span class="soporte-progreso__span">2</span>
                </div>
                <div class="soporte-progreso__check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </div>
            </div>

            <div class="soporte-progreso__paso">
                <p class="soporte-progreso__nombre">Problema</p>
                <div class="soporte-progreso__bullet">
                    <span class="soporte-progreso__span">3</span>
                </div>
                <div class="soporte-progreso__check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                </div>
            </div>
        </div>

        <form class="soporte-form">
            <fieldset class="soporte-form__fieldset">
                <legend class="soporte-form__legend">Información del Cliente</legend>

                <div class="soporte-form__campo">
                    <label for="soporte-cliente" class="soporte-form__label">Nombre</label>
                    
                    <input 
                        id="soporte-cliente"
                        type="text" 
                        class="soporte-form__input" 
                        placeholder="Ingrese su nombre"
                    >
                </div>

                <div class="soporte-form__campo">
                    <label for="soporte-telefono" class="soporte-form__label">Teléfono</label>
                    
                    <input 
                        id="soporte-telefono"
                        type="tel" 
                        class="soporte-form__input" 
                        placeholder="Ingrese su número telefónico"
                    >
                </div>

                <div class="soporte-form__campo">
                    <label for="soporte-correo" class="soporte-form__label">Correo</label>
                    
                    <input 
                        id="soporte-correo"
                        type="email" 
                        class="soporte-form__input" 
                        placeholder="Ingrese su correo"
                    >
                </div>

                <button class="soporte-form__btn" id="btn-siguiente">Siguiente</button>
            </fieldset>

            <fieldset class="soporte-form__fieldset">
                <legend class="soporte-form__legend">Información del Producto</legend>
                <div class="soporte-form__campo">
                    <label for="soporte-modelo" class="soporte-form__label">Modelo del Producto</label>
                    
                    <input 
                        id="soporte-modelo"
                        type="text" 
                        class="soporte-form__input" 
                        placeholder="Ingrese el modelo del producto"
                    >
                </div>

                <div class="soporte-form__campo">
                    <label for="soporte-serie" class="soporte-form__label">Número de Serie</label>
                    
                    <input 
                        id="soporte-serie"
                        type="text" 
                        class="soporte-form__input" 
                        placeholder="Ingrese el numero de serie"
                    >
                </div>

                <div class="soporte-form__btns">
                <button class="soporte-form__btn" id="btn-siguiente">Anterior</button>
                <button class="soporte-form__btn" id="btn-siguiente">Siguiente</button>
                </div>
            </fieldset>
            
            <fieldset class="soporte-form__fieldset">
                <legend class="soporte-form__legend">Detalles del Problema</legend>
                
                <div class="soporte-form__campo">                    
                    <select class="soporte-form__select" id="soporte-categorias">
                        <option value="" disabled selected>Tipo de Problema</option>
                        <option value="1">categoria 1</option>
                        <option value="2">categoria 2</option>
                        <option value="3">categoria 3</option>
                        <option value="4">categoria 4</option>
                    </select>
                </div>

                <div class="soporte-form__campo">
                    <label for="soporte-mensaje" class="soporte-form__label">Problema del Producto</label>
                    
                    <textarea class="soporte-form__textarea" id="soporte-mensaje" rows="5" placeholder="Describa el problema del producto"></textarea>
                </div>

                <div class="soporte-form__btns">
                <button class="soporte-form__btn" id="btn-siguiente">Anterior</button>
                
                <input class="soporte-form__submit" type="submit" value="Enviar">
                </div>
            </fieldset>
        </form>
    </div>
</main>

<?php 
include_once __DIR__.'/templates/footer.php';
?>