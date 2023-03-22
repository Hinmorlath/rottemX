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
        <button><span class="fa-solid fa-plus"></span>Agregar cuarto</button>
        <button><span class="fa-solid fa-trash"></span>Eliminar</button>
        <button><span class="fa-solid fa-reply"></span>Subir nivel</button>
        <button><span class="fa-solid fa-share"></span>Bajar nivel</button>
        <article></article>
        <article>
            <section>Piso 1</section>
            <button>
                <span class="fa-solid fa-plus"></span>
            </button>
        </article>
    </main>
    <aside class="aside_G">
        <span class="titulo_G subtitulo_G">Mis casas</span>
        <form action="">
            <div>
                <div>
                    <input type="text" name="nombreCuarto" id="nombrCuarto" placeholder="Nombre del cuarto">
                    <span class="fa-solid fa-pen"></span>
                    <input type="color" name="colorCuarto" id="colorCuarto">
                </div>
                <div>
                    <div>
                        <span class="fa-regular fa-lightbulb"></span>
                        Automatización
                        <span class="fa-solid fa-toggle-on"></span>
                    </div>
                    <div>
                        <input type="time" name="horaI" id="horaI">
                        <span> - </span>
                        <input type="time" name="horaF" id="horaF">
                        <span class="fa-solid fa-square"></span>
                    </div>
                    <div>
                        <span class="fa-solid fa-plus"></span>
                        Agregar dispositivo
                    </div>
                    <section>
                        <div>
                            <span class="fa-regular fa-lightbulb"></span>
                        </div>
                        <div>
                            <span class="fa-solid fa-tv"></span>
                        </div>
                        <div>
                            <span class="fa-solid fa-fan"></span>
                        </div>
                    </section>
                </div>
            </div>
        </form>
    </aside>
</body>
</html>