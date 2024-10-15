<div class="loginleft">
    <h1 id="titulo"><i class="fas fa-recycle"></i> Bio-Clean Earth</h1>
    <p>Bienvenido. Nuestro sistema te ayuda a gestionar tus reciclajes de manera eficiente y responsable, reduciendo el impacto ecológico y creando un futuro más limpio y sostenible.</p>
    <img src="assets/img/imglogin.png" alt="" width="357.24px" height="217.71px">
</div>
<div class="loginright">
    <?php
    if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje'] == 1) {
            echo '<div id="mensaje"><p class="error-login">Correo y/o contraseña incorrectos</p></div>';
        } else if ($_GET['mensaje'] == 3) {
            echo '<div id="mensaje"><p class="succes-login">Cuenta creada con exito</p></div>';
        }
    }
    ?>
    <div class="loginrightChild">
        <h2>Iniciar sesión</h2>
        <p class="textw">Bienvenido</p>
        <form action="" method="POST">
            <input type="email" name="correo" id="" placeholder="Correo">
            <input type="password" name="contraseña" id="" placeholder="Contraseña">
            <div class="recupass">
                <a href="#">¿Olvidastes tu contraseña?</a>
            </div>
            <input class="btn-login" type="submit" name="btnLogin" value="Iniciar sesión">
        </form>
        <div class="register">
            <p>¿No tienes cuenta?</p>
            <a href="?controlador=login&accion=singin">Registrate</a>
        </div>
    </div>
</div>