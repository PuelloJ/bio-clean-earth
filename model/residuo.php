<?php

include_once("conexion.php");

class Residuo
{

    private  $idResiduo;
    private  $direccionIMG;
    private  $nombre;
    private  $direccionClasiIMG;
    private  $clasificacion;
    private  $tipo;
    private  $nombreTransformacion;
    private  $descripcionTransformacion;
    private  $etiqueta;
    private  $direccionTransformacionIMG;
    private  $descripcion;

    public $APROVECHABLES = "Residuo aprovechable, puedes arrojarlo en la cesta blaca.";
    public $NOAPROVECHABLES = "Residuo no aprovechable, puedes arrojarlo en la cesta negra.";
    public $ORGANICOS = "Residuo organico, puedes arrojarlo en la cesta verde.";

    public function __construct(
        $idResiduo,
        $direccionIMG,
        $nombre,
        $descripcion,
        $etiqueta,
        $direccionClasiIMG,
        $clasificacion,
        $tipo,
        $direccionTransformacionIMG,
        $nombreTransformacion,
        $descripcionTransformacion
    ) {
        $this->idResiduo = $idResiduo;
        $this->direccionIMG = $direccionIMG;
        $this->nombre = $nombre;
        $this->direccionClasiIMG = $direccionClasiIMG;
        $this->clasificacion = $clasificacion;
        $this->tipo = $tipo;
        $this->nombreTransformacion = $nombreTransformacion;
        $this->descripcionTransformacion = $descripcionTransformacion;
        $this->etiqueta = $etiqueta;
        $this->direccionTransformacionIMG = $direccionTransformacionIMG;
        $this->descripcion = $descripcion;
    }

    public static function consultarResiduo()
    {

        $listaResiduo = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM residuos");
        foreach ($sql->fetchAll() as $residuo) {
            $listaResiduo[] = new Residuo($residuo['ID_Residuo'], $residuo['Direccion_IMG'], $residuo['Nombre'], $residuo['Descripcion'], $residuo['Etiqueta'], $residuo['DireccionClasi_IMG'], $residuo['Clasificacion'], $residuo['Tipo'], $residuo['DireccionTransformacion_IMG'], $residuo['Transformacion'], $residuo['Des_Transformacion']);
        }

        return $listaResiduo;
    }

    public function getDescripcionTransformacion()
    {
        return $this->descripcionTransformacion;
    }

    public function getNombreTansformacion()
    {
        return $this->nombreTransformacion;
    }

    public function getDireccionTransformacionIMG()
    {
        return $this->direccionTransformacionIMG;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getDireccionClasiIMG(){
        return $this -> direccionClasiIMG;
    }

    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDireccionIMG()
    {
        return $this->direccionIMG;
    }

    public function getIdResiduo()
    {
        return $this->idResiduo;
    }
}
