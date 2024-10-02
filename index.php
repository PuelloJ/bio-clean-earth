<?php

include_once("model/usuario.php");
include_once("model/usuario_session.php");

$usuarioSession = new  UsuarioSession();
$usuario = new Usuario();

$controlador = "login";
$accion = "login";

if (isset($_SESSION['usuario'])) {

    //echo "Hay sesión";
    $usuario->setUsuario($usuarioSession->getUsuarioActual());
    if (isset($_GET['controlador']) && isset($_GET['accion'])) {
        if (($_GET['controlador'] != "") && ($_GET['accion'] != "")) {

            $controlador = $_GET['controlador'];
            $accion = $_GET['accion'];
        }
    }
    include_once("view/template.php");
} else if (isset($_POST['btnLogin'])) {

    if (isset($_POST['correo']) && isset($_POST['contraseña'])) {

        //echo "Validación de login";
        $correoForm = $_POST['correo'];
        $contraseñaForm = $_POST['contraseña'];

        if ($usuario->existeUsuario($correoForm, $contraseñaForm)) {
            //echo "Usuario validado";
            $usuarioSession->setUsuarioActual($correoForm);
            $usuario->setUsuario($correoForm);

            header("Location:./?controlador=paginas&accion=inicio");
            if (isset($_GET['controlador']) && isset($_GET['accion'])) {

                if (($_GET['controlador'] != "") && ($_GET['accion'] != "")) {

                    $controlador = $_GET['controlador'];
                    $accion = $_GET['accion'];
                }
            }

            include_once("view/template.php");
        } else {
            //echo "usuario o contraseña incorrectas";
            header("Location:./?controlador=login&accion=login&mensaje=1");
            //$errorLogin = "Correo y/o contraseña incorrectos";
            include_once("login.php");
        }
    }
} else if (isset($_POST['btnSingIn'])) {

    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['contraseña'])) {

        if (isset($_GET['controlador']) && isset($_GET['accion'])) {

            if (($_GET['controlador'] != "") && ($_GET['accion'] != "")) {

                $controlador = $_GET['controlador'];
                $accion = $_GET['accion'];
            }
        }

        $id = $usuario->getIdUsuarioAleatorio();
        $nombreRegistro = $_POST['nombre'];
        $apellidoRegistro = $_POST['apellido'];
        $correoRegistro = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        if ($usuario->comprobarUsuario($correoRegistro)) {
            header("Location:./?controlador=login&accion=singin&mensaje=2");
            //$errorRegistro = "Correo ya se encuentra en uso.";
            include_once("login.php");
        } else {
            $usuario->crear($id, $nombreRegistro, $apellidoRegistro, $correoRegistro, $contraseña);
            //$mensaje = "Cuenta creada con exito.";
            echo "usuario registrado";
            header("Location:./?controlador=login&accion=login&mensaje=3");
            include_once("login.php");
        }
    }
} else {

    if (isset($_GET['controlador']) && isset($_GET['accion'])) {

        if (($_GET['controlador'] != "") && ($_GET['accion'] != "")) {

            $controlador = $_GET['controlador'];
            $accion = $_GET['accion'];
        }
    }
    include_once("login.php");
}
