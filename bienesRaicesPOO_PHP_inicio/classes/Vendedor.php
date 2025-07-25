<?php

namespace App;

class Vendedor extends ActiveRecord
{
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apeliido', 'telefono'];

    public $id;
    public $nombre;
    public $apeliido;
    public $telefono;
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apeliido = $args['apeliido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }
}
