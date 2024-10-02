<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bio-Clean Earth</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/dashboard.css?v=<?php echo(rand()); ?>">
  <!-- Fuente -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <h2><i class="fas fa-recycle"></i></h2>
      <ul>
        <li><a href="?controlador=paginas&accion=inicio"><i class="fas fa-home"></i>Inicio</a></li>
        <li><a href="?controlador=paginas&accion=reciclaje"><i class="fas fa-recycle"></i>Reciclaje</a></li>
        <li><a href="?controlador=paginas&accion=puntuacion"><i class="fas fa-trophy"></i></i>Puntuación</a></li>
        <li><a href="?controlador=paginas&accion=premios"><i class="fas fa-award"></i>Premios</a></li>
        <li><a href="?controlador=paginas&accion=residuos"><i class="fas fa-trash"></i></i>Residuos</a></li>
      </ul>
    </div>
    <div class="main">

      <div class="topbar">
        <div class="user">
          <div class="userAvatar"><img src="assets/img/usuario.png" alt=""></div>
          <div class="userInfo">
            <p class="nombre"><?php echo $usuario->getNombre() . " " .  $usuario->getApellido();
                              ?></p>
            <p class="id">ID: <?php echo $usuario->getIdUsuario(); ?></p>
          </div>
          <p class="userPuntos"><i class="fas fa-star"></i><?php echo number_format($usuario->getTotalPuntos()); ?></p>
          <p class="userReciclado"> <i class="fas fa-recycle"></i><?php echo number_format($usuario->getTotalReciclado()) . "g"; ?></p>
        </div>
        <div class="search">
          <label>
            <input type="text" name="" id="" placeholder="Buscar">
            <i class="fas fa-search"></i>
          </label>
        </div>
        <div class="cerrarSesion">
          <a href="model/cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>
      <?php
      include_once("router.php");
      ?>
    </div>
  </div>
  <!-- Iconos -->
  <script type="text/javascript" src="assets/main.js"></script>
  <script src="https://kit.fontawesome.com/31f9a5e4d8.js" crossorigin="anonymous"></script>
</body>

</html>