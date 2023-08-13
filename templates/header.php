<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinub | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header" id="header-nav">
        <div class="header__logo">
            <a href="index.php">Kinub</a>
        </div>

        <nav class="navegacion">
            <a href="equipos.php" class="navegacion__link">Equipos</a>
            <a href="#" class="navegacion__link">Soporte técnico</a>
            <a href="certificados.php" class="navegacion__link">Certificados</a>
            <a href="index.php#formulario" class="navegacion__link">Contacto</a>
        </nav>
    </header>

    <button class="btn-whatsapp" id="btn-whatsapp">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </button>

    <div class="header-mobile">
        <a class="header-mobile__logo" href="/">Kinub</a>

        <div class="header-mobile__menu">
            <img id="mobile-menu" src="/src/img/menu.svg" alt="Menu desplegable">
        </div>
    </div>

<aside class="sidebar"> 
    <div class="sidebar__header">

        <!--Imagen logo-->
        <a href="/"><h2>Kinub</h2></a>

        <div class="sidebar__cerrar">
            <img id="cerrar-menu" src="/src/img/cerrar.svg" alt="imagen cerrar menu">
        </div>
    </div>

    <!--Falta funcion mostrar enlace activo-->
    <nav class="navegacion-mobile">
        <a href="equipos.php" class="navegacion-mobile__link activo">Equipos</a>
        <a href="#" class="navegacion-mobile__link">Soporte técnico</a>
        <a href="certificados.php" class="navegacion-mobile__link">Certificados</a>
        <a href="index.php#formulario" class="navegacion-mobile__link">Contacto</a>
    </nav>
</aside>