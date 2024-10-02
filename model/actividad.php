<?php

include_once("conexion.php");

class Actividad{

    private $idActividad;
    private $descripcion;
    private $nombre;
    private $avatar;
    private $fecha;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
    
    public function __construct2($nombre, $descripcion)
    {
        $this -> nombre = $nombre ;
        $this -> descripcion = $descripcion;
    }
    
    public function crearActividad($idUsuario)
    {
        
        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("INSERT INTO actividades_recientes(ID_Actividad, Descripcrion, ID_Usuario) VALUES (?, ?, ?)");
        $sql->execute(array($this -> getIdActividadAleatoria(), $this -> getDescripcion(), $idUsuario));
    }

    public static function consultarActividad($idUsuario)
    {
        $listaActividad = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->prepare("SELECT u.Nombre as nombre, u.Apellido as apellido, a.Descripcrion as descripcion FROM usuarios u JOIN actividades_recientes a on a.ID_Usuario = u.ID_Usuario WHERE u.ID_Usuario != ? ORDER BY a.Fecha DESC LIMIT 7");
        $sql->execute(array($idUsuario));
        foreach ($sql->fetchAll() as $actividad) {
            $listaActividad[] = new Actividad($actividad['nombre'] . " " . $actividad['apellido'], $actividad['descripcion']);
           
        }

        return $listaActividad;
        
    }

    public function getIdActividad(){
        return $this -> idActividad;
    }

    public function getNombre(){
        return $this -> nombre;
    }

    public function setDescripcion($nombre, $puntos, $reciclado){
        $this -> descripcion = $nombre . " obtuvo " . $puntos . " puntos y reciclo " . $reciclado;
    }

    public function getDescripcion(){
        return $this -> descripcion;
    }

    public function getIdActividadAleatoria()
    {

        mt_srand((float)microtime() * 10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid =  substr($charid, 0, 8);
        return "AR" . $uuid;
    }

}