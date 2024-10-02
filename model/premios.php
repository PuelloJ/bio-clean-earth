<?php

include_once("conexion.php");

class Premio
{

    private $idPremio;
    private $imagen;
    private $nombre;
    private $descripcion;
    private $tipo;
    private $precio;
    private $precioUsd;


    public function __construct($idPremio, $imagen, $nombre, $descripcion, $tipo, $precio, $precioUsd)
    {
        $this->idPremio = $idPremio;
        $this->imagen = base64_encode($imagen);
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->precioUsd = $precioUsd;
    }

    public static function consultarPremio()
    {

        $listaPremio = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM premios");
        foreach ($sql->fetchAll() as $premio) {
            $listaPremio[] = new Premio($premio['ID_Premio'], $premio['Avatar'], $premio['Nombre'], $premio['Descripcion'], $premio['Tipo'], $premio['Precio'], $premio['Usd']);
        }

        return $listaPremio;
    }

    public function getIdPremio()
    {
        return $this->idPremio;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioUDS()
    {
        return $this->precioUsd;
    }
}
