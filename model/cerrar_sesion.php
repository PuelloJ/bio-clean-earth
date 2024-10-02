<?php

    include_once("usuario_session.php");

    $usuarioSession = new UsuarioSession();
    $usuarioSession -> cerrarSession();

    header("location: ../index.php");
