    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>Bio-Celan Earth - Iniciar sesión o Registrarse</title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/login.css?v=<?php echo(rand()); ?>">
        <!-- Fuente -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <?php
            include_once("router.php");
            ?>
        </div>

        <?php
        require("view/footer.php");
        ?>

        <script src="https://kit.fontawesome.com/31f9a5e4d8.js" crossorigin="anonymous"></script>
    </body>

    </html>