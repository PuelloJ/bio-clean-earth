<div class="loginleft">
    <h1 id="titulo"><i class="fas fa-recycle"></i> Bio-Clean Earth</h1>
    <p>Bienvenido con nuestro sistemas podras realizar tus reciclajes de la manera correcta, ademas ayudaras a mejorar el medio ambiente</p>
    <img src="assets/img/imglogin.png" alt="" width="357.24px" height="217.71px">
</div>

<div class="loginright">
    <?php
    if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje'] == 2) {
            echo '<div id="mensaje"><p class="error-login">Correo ya se encuentra en uso</p></div>';
        }
    }
    ?>
    <div class="loginrightChild">
        <h2>Registrarse</h2>
        <form action="" method="POST">
            <input required type="text" name="nombre" id="" placeholder="Nombre">
            <input required type="text" name="apellido" id="" placeholder="Apellido">
            <input required type="email" name="correo" id="" placeholder="Correo">
            <input required type="password" name="contraseña" id="" placeholder="Contraseña">
            <input required class="btn-register" type="submit" name="btnSingIn" value="Registrarse">
            <p>Al hacer clic en “Registrarse”, aceptas nuestros <span>terminos y condiciones</span>, y haber leido nuestra politica de uso de dato.</p>
        </form>
    </div>
</div>