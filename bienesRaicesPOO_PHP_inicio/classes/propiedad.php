<?php

namespace App;

class Propiedad
{
    protected static $db;
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;
    //definir la conexion a la BD
    public static function setDB($database)
    {
        self::$db = $database;
    }
    public function __construct($args = [])

    {

        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? 'imagen.jpg';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $args['vendedores_id'] ?? '';
    }
    public function guardar()
    {
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();



        //Insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc,
   estacionamiento,creado,vendedores_id) VALUES ('$this->titulo','$this->precio','$this->imagen','$this->descripcion','$this->habitaciones','$this->wc','$this->estacionamiento', '$this->creado','$this->vendedores_id')";
        $resultado = self::$db->query($query);
        debuguear($resultado);
    }
    //Identificar y unir los atributs de la BD
    public function atributos()
    {
        $atributos = [];
        foreach (self::$columnasDB as $columna) {
           
            if ($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
             echo "<hr>";
            echo $atributos[$columna];
        }
        return $atributos;
    }
    public function sanitizarAtributos()
    {
        $atributos=$this->atributos();
        debuguear($atributos);
    }
}
