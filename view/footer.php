<?php
$fecha = date("Y");
?>

<footer>
    <div class="footer">
        <div>
            <div class="footer-logo">
                <h1><i class="fas fa-recycle"></i> Bio-Clean Earth</h1>
            </div>
            <div class="footer-redes">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="footer-contacto">
            <h3>Contáctanos</h3>
            <p><a href="mailto:bio-ce-support@bcesupport.com">bio-ce-support@bcesupport.com</a></p>
            <p><a href="tel:+573123456789">+57 312 345 6789</a></p>
        </div>
        <div class="footer-suscribir">
            <h3>Suscribete</h3>
            <form action="" method="post">
                <input type="email" name="correo" placeholder="Correo electrónico" required>
                <input class="btn-suscribir" type="submit" name="btnLogin" value="Suscribir">
            </form>
        </div>
    </div>
    <!-- Separación -->
    <div class="footer-copy">
        <hr>
        <div class="terminos">
            <p> <?php echo $fecha; ?> &copy; Bio-Celan Earth</p>
            <a href="#">Terminos y condiciones</a>
            <a href="#">Politica de privacidad</a>
        </div>
    </div>
</footer>