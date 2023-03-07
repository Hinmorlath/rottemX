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
        <figure class="logoMain">
            <img src="img/rottemX.png" alt="RottemX">
        </figure>
    </main>
    <aside class="aside_IS">
        <span class="btnIS">Inicio de Sesión</span>
        <span class="btnR">Registrase</span>
        <div class="boxR" id="boxR">
            <!--Este es el formulario del inicio de Sesión-->
            <form class="formIS" action="#" method="post">
                <label for="emailUsuario_IS">
                    Usuario:
                </label>
                <!--Input de Correo del usuario-->
                <input type="email" name="emailUsuario" id="emailUsuario_IS" placeholder="Escribe tu correo" autofocus required>
                <label for="pass_IS">
                    Contraseña:
                </label>
                <!--Input de Correo de la contraseña-->
                <input type="password" name="pass_IS" id="pass_IS" placeholder="Escribe tu contraseña" required>
                <input class="btnCancelar" type="reset" value="Cancelar">
                <input class="btnGuardar" type="submit" value="Iniciar">
            </form>

            <!--Este es el formulario de Registro-->
            <form class="formR" action="#" method="post">
                <!--Input de la imagen-->
                <input type="file" name="imgUsuario_IS" id="imgUsuario_IS">
                <span class="fa-solid fa-plus"></span>
                <label for="usuario_R">Usuario:</label>
                <!--Input del Usuario-->
                <input type="text" name="usuario_R" id="usuario_R" placeholder="Nombre de usuario">
                <label for="emailUsuario_R">Correo electrónico:</label>
                <!--Input de Correo del usuario-->
                <input type="email" name="emailUsuario_R" id="emailUsuario_R" placeholder="Correo electrónico" autocomplete required>
                <label for="pass_R">Contraseña:</label>
                <!--Input de Correo de la contraseña-->
                <input type="password" name="pass_R" id="pass_R" placeholder="Ingresa una contraseña" minlength="6" required>
                <label for="confirmaPass_R">Confirmación:</label>
                <!--Input de Confirmación de la contraseña-->
                <input type="pass" name="confirmaPass_R" id="confirmaPass_R" placeholder="Confirma tu contraseña">
                <input class="btnCancelar" type="reset" value="Cancelar">
                <button class="btnGuardar" type="submit">
                    <span class="fa-solid fa-floppy-disk"></span>
                    <span>Guardar</span>
                </button>
            </form>
        </div>
    </aside>
</body>
</html>