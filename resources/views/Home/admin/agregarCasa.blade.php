<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/rottemX_icono.png" type="png">
    <link rel="stylesheet" href="iconos/css/all.css">
    <link rel="stylesheet" href="css/estilosG.css">
    <title>Agregando Casa</title>
</head>
<body class="body_G">
    <header class="header_G">
        <figure class="logo_G">
            <a href="casas">
                <img src="img/rottemX.png" alt="RottemX">
            </a>
        </figure>
        <span class="titulo_G">Usuario</span>
        <div class="iconoSup" id="iconoSup">
            <button class="btn-cancelarC" type="reset">
                <span class="fa-solid fa-xmark ajustes"></span>
            </button>
            <button class="btn-guardarC" type="submit">
                <span class="fa-solid fa-floppy-disk ajustes"></span>
            </button>
        </div>
    </header>
    <main class="main_G main_G2">
        <div class="controles">
            <button><span class="fa-solid fa-plus agregar"></span>Agregar cuarto</button>
            <button><span class="fa-solid fa-trash eliminarCuarto"></span>Eliminar</button>
            <button><span class="fa-solid fa-reply subirCuarto"></span>Subir nivel</button>
            <button><span class="fa-solid fa-share bajarCuarto"></span>Bajar nivel</button>
        </div>
        <article class="mapeo" id="mapeo"></article>
        <article class="pisoSeccion" id="pisoSeccion">
            <button class="piso" id="piso">Piso 1</button>
            <button class="piso" id="agregarPiso">
                <span class="fa-solid fa-plus agregar"></span>
            </button>
        </article>
    </main>
    <aside class="aside_G">
        <span class="titulo_G subtitulo_G subtitulo_G2">Dispositivos</span>
        <form class="registroDC" action="">
            <div id="bloque1">
                <div class="infoCuarto">
                    <input type="text" name="nombreCuarto" id="nombrCuarto" placeholder="Nombre del cuarto" disabled>
                    <span class="fa-solid fa-pen"></span>
                    <input type="color" name="colorCuarto" id="colorCuarto">
                </div>
                <div id="autoFoco">
                    <div class="infoCuarto">
                        <span class="fa-regular fa-lightbulb focoOn"></span>
                        Automatización
                        <span class="fa-solid fa-toggle-on autoOn"></span>
                    </div>
                    <div class="autoFoco">
                        <input type="time" name="horaI" id="horaI">
                        <span> - </span>
                        <input type="time" name="horaF" id="horaF">
                        <span class="fa-solid fa-square-check autoOn"></span>
                    </div>
                </div>
                <div class="agregarD">
                    <span class="fa-solid fa-plus agregar"></span>
                    Agregar dispositivo
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
        </form>
    </aside>
</body>
</html>