<?php

class ControladorPaginas
{

    public function inicio()
    {
        $usuario1 = $GLOBALS['usuario'];
        include_once("model/reciclaje.php");
        include_once("model/actividad.php");

        //Consultar reciclaje usuario
        $reciclaje = new Reciclaje();
        $reciclaje->consultarReciclajeTotal($usuario1->getIdUsuario());

        //Consultar actividades
        $actividadTabla = Actividad::consultarActividad($usuario1->getIdUsuario());
        include_once("view/pages/inicio.php");
    }

    public function reciclaje()
    {
        $usuario1 = $GLOBALS['usuario'];
        include_once("model/reciclaje.php");
        include_once("model/actividad.php");
        include_once("model/usuario.php");

        $reciclaje1 = new Reciclaje();
        $usuario = new Usuario();
        $actividad = new Actividad();

        $reciclaje = Reciclaje::comprobarReciclaje($usuario1->getIdUsuario());

        if($reciclaje == false){
            $reciclaje1 -> crearReciclaje($usuario1 -> getIdUsuario());
            $usuario -> editarUsuario($reciclaje1 -> getPuntos() + $usuario1-> getTotalPuntos(), $reciclaje1 -> getReciclado() + $usuario1 -> getTotalReciclado(), $usuario1 -> getIdUsuario());
            $actividad -> setDescripcion($usuario1 -> getNombre() . " " . $usuario1 -> getApellido(), $reciclaje1 -> getPuntos(), $reciclaje1 -> getReciclado());
            $actividad -> crearActividad($usuario1 -> getIdUsuario());
        }

        include_once("view/pages/reciclaje.php");
    }

    public function puntuacion()
    {
        $usuarioTablas = Usuario::consultarUsuario();
        include_once("view/pages/puntuacion.php");
    }

    public function premios()
    {
        include_once("model/premios.php");
        $premios = Premio::consultarPremio();
        include_once("view/pages/premios.php");
    }

    public function residuos()
    {
        include_once("model/residuo.php");
        $residuo = Residuo::consultarResiduo();
        include_once("view/pages/residuos.php");
    }
}
