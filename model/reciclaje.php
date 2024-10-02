<?php

include_once("conexion.php");

define("ORGANICO", rand(500, 3500));
define("APROVECHABLE", rand(500, 3500));
define("NOAPROVECHABLE", rand(500, 3500));

class Reciclaje
{

    private $idReciclaje;
    private $organico;
    private $aprovechable;
    private $noAprovechable;
    private $puntos;
    private $reciclado;
    private $fehca = "";

    public function __construct()
    {
    }

    public function consultarReciclajeTotal($idUsuario)
    {
        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("SELECT SUM(Aprovechables) as Aprovechables, 
        SUM(Organicos) as No_Aprovechable, SUM(No_Aprovechable) as Organicos 
        FROM reciclaje WHERE ID_Usuario = ?");

        $sql->execute(array($idUsuario));

        foreach ($sql as $reciclado) {
            $this->aprovechable = $reciclado['Aprovechables'];
            $this->noAprovechable = $reciclado['No_Aprovechable'];
            $this->organico = $reciclado['Organicos'];
        }
    }

    public static function comprobarReciclaje($idUsuario)
    {

        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("SELECT * FROM reciclaje WHERE Fecha_Reciclaje >= CURDATE() AND ID_Usuario = ?");
        $sql->execute(array($idUsuario));

        if ($sql->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function crearReciclaje($idUsuario)
    {
        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare(" INSERT INTO reciclaje (ID_Reciclaje, Aprovechables, Organicos, No_Aprovechable, Puntos, Reciclado, ID_Usuario) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql->execute(array($this -> getIdAleatorio(), APROVECHABLE, ORGANICO, NOAPROVECHABLE, $this -> getPuntos(), $this -> getReciclado(), $idUsuario));
    }

    public function getProcentaje($reciclado)
    {
        $total = $this->aprovechable + $this->noAprovechable + $this->organico;
        if ($total == 0) {
            return 0;
        } else {
            return $porcentajeReciclado = $reciclado * 100 / $total;
        }
    }

    public function getIdAleatorio()
    {

        mt_srand((float)microtime() * 10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid =  substr($charid, 0, 8);
        return "RE" . $uuid;
    }

    public function getIdReciclaje()
    {
        return $this->idReciclaje;
    }
    public function getOrganico()
    {
        return $this->organico;
    }
    public function getAprovechable()
    {
        return $this->aprovechable;
    }

    public function getNoAprovechable()
    {
        return $this->noAprovechable;
    }

    public function getOrganicoRendom()
    {
        $rand =  rand(500, 3500);
        return $this->organico = $rand;
    }
    public function getAprovechableRandom()
    {
        $rand =  rand(500, 3500);
        return $this->aprovechable = $rand;
    }
    public function getNoAprovechableRandom()
    {
        $rand =  rand(500, 3500);
        return $this->noAprovechable = $rand;
    }

    public function getPuntos()
    {
        $var = round($this->getReciclado() / 3);

        return $this->puntos = $var;
    }
    public function getReciclado()
    {
        return $this->reciclado = APROVECHABLE + NOAPROVECHABLE + ORGANICO;
    }
}
