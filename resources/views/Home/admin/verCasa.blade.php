<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/rottemX_icono.png" type="png">
    <link rel="stylesheet" href="iconos/css/all.css">
    <link rel="stylesheet" href="css/estilosG.css">
    <title>NombreUsuario</title>
</head>
<body class="body_G">
    <header class="header_G">
        <figure class="logo_G">
            <a href="casas">
                <img src="img/rottemX.png" alt="RottemX">
            </a>
        </figure>
        <span class="titulo_G">Dueño</span>
        <div class="iconoSup" id="iconoSup">
            <button class="btn-agregarUsuario" type="reset">
                <span class="fa-solid fa-user-plus ajustes"></span>
            </button>
            <button class="btn-ajustes">
                <span class="fa-solid fa-gear ajustes"></span>
            </button>
        </div>
    </header>
    <main class="main_G main_G2">
        <article class="mapeo2" id="mapeo2"></article>
        <article class="pisoSeccion" id="pisoSeccion">
            <button class="piso" id="piso">Piso 1</button>
        </article>
    </main>
    <aside class="aside_G">
        <span class="titulo_G subtitulo_G subtitulo_G2">Dispositivos</span>
        <div id="bloque1">
            <div class="infoCuarto">
                <input type="text" name="nombreCuarto" id="nombrCuarto" placeholder="Nombre del cuarto" disabled>
            </div>
            <section class="dispositivos">
                <div class="dispositivoIn">
                    <span class="fa-regular fa-lightbulb"></span>
                </div>
                <div class="dispositivoIn">
                    <span class="fa-solid fa-tv"></span>
                </div>
                <div class="dispositivoIn">
                    <span class="fa-solid fa-fan"></span>
                </div>
            </div>
        </div>
    </aside>
</body>
</html>