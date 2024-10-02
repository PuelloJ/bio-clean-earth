<?php

include_once("conexion.php");

class Usuario
{
    //private $avatar;
    private $posicion;
    private $nombre;
    private $apellido;
    private $correo;
    private $contraseña;
    private $totalPuntos;
    private $totalReciclaje;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function __construct5($posicion, $nombre, $apellido, $totalPuntos, $totalReciclaje)
    {
        $this->posicion = $posicion;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->totalPuntos = $totalPuntos;
        $this->totalReciclaje = $totalReciclaje;
    }

    public function existeUsuario($correo, $contraseña)
    {

        $md5Contraseña = md5($contraseña);
        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE Correo = ? AND contrasena = ?");
        $sql->execute(array($correo, $md5Contraseña));

        if ($sql->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function comprobarUsuario($correo)
    {

        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE Correo = ?");
        $sql->execute(array($correo));

        if ($sql->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public static function crear($id, $nombre, $apellido, $correo, $contraseña)
    {

        $md5Contraseña = md5($contraseña);
        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("INSERT INTO usuarios(ID_Usuario, Nombre, Apellido, Correo, Contrasena) VALUES(?,?,?,?,?)");
        $sql->execute(array($id, $nombre, $apellido, $correo, $md5Contraseña));
    }

    public function setUsuario($correo)
    {
        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE Correo = ?");
        $sql->execute(array($correo));

        foreach ($sql as $usuario) {
            $this->ID = $usuario['ID_Usuario'];
            $this->nombre = $usuario['Nombre'];
            $this->apellido = $usuario['Apellido'];
            $this->totalPuntos = $usuario['Puntos_Totales'];
            $this->totalReciclaje = $usuario['Total_Reciclado'];
        }
    }

    public static function consultarUsuario()
    {
        $posicion = 1;

        $listaUsuarios = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT Nombre, Apellido, Puntos_Totales, Total_Reciclado FROM usuarios ORDER BY Puntos_Totales DESC");
        foreach ($sql->fetchAll() as $usuario) {
            $listaUsuarios[] = new Usuario($posicion, $usuario['Nombre'], $usuario['Apellido'], $usuario['Puntos_Totales'], $usuario['Total_Reciclado']);
            $posicion++;
        }

        return $listaUsuarios;
    }

    public static function editarUsuario($puntos, $reciclado, $idusuario)
    {

        $conexion = BD::crearInstancia();

        $sql = $conexion->prepare("UPDATE usuarios SET Puntos_Totales = ?, Total_Reciclado = ? WHERE usuarios.ID_Usuario = ?");
        $sql->execute(array($puntos, $reciclado, $idusuario));
    }

    public function getPosicion()
    {
        return $this->posicion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getIdUsuario()
    {
        return $this->ID;
    }

    public function getIdUsuarioAleatorio()
    {

        mt_srand((float)microtime() * 10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid =  substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4);
        return $uuid;
    }

    public function getTotalPuntos()
    {
        return $this->totalPuntos;
    }

    public function getTotalReciclado()
    {
        return $this->totalReciclaje;
    }
}
