<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/rottemX_icono.png" type="png">
    <link rel="stylesheet" href="iconos/css/all.css">
    <link rel="stylesheet" href="css/estilosIS.css">
    <title>Iniciar Sesión</title>
</head>
<body class="body_IS">
    <main class="main_IS">
        <figure>
            <img src="img/rottemX.png" alt="RottemX">
        </figure>
    </main>
    <aside class="aside_IS">
        <span class="btnIS">Inicio de Sesión</span>
        <span class="btnR">Registrase</span>
        <form class="formIS" action="#" method="post">
            <label for="emailUsuario_IS">
                Usuario:
            </label>
            <input type="email" name="emailUsuario" id="emailUsuario_IS" placeholder="Escribe tu correo" autofocus>
            <label for="pass_IS">
                Contraseña:
            </label>
            <input type="password" name="pass_IS" id="pass_IS" placeholder="Escribe tu contraseña">
            <input class="btnCancelar" type="reset" value="Cancelar">
            <button class="btnGuardar" type="submit">
                <span class="fa-solid fa-floppy-disk"></span>
                <span>Guardar</span>
            </button>
        </form>
        <form class="formR" action="#" method="post">
            <input type="file" name="imgUsuario_IS" id="imgUsuario_IS">
            <span class="fa-solid fa-plus"></span>
            <label for="usuario_R">Usuario:</label>
            <input type="text" name="usuario_R" id="usuario_R" placeholder="Nombre de usuario">
            <label for="emailUsuario_R">Correo electrónico:</label>
            <input type="email" name="emailUsuario_R" id="emailUsuario_R" placeholder="Correo electrónico" autocomplete>
            <label for="pass_R">Contraseña:</label>
            <input type="password" name="pass_R" id="pass_R" placeholder="Ingresa una contraseña" minlength="6">
            <label for="telefono_R">Teléfono:</label>
            <input type="text" name="telUsuario_R" id="telUsuario_R" placeholder="Ingresa un número telefónico">
            <input class="btnCancelar" type="reset" value="Cancelar">
            <button class="btnGuardar" type="submit">
                <span class="fa-solid fa-floppy-disk"></span>
                <span>Guardar</span>
            </button>
        </form>
    </aside>
</body>
</html>