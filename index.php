<?php
require 'Producto.php';

use App\Models\Producto;

$producto = new Producto();
$producto->id = 12;
$producto->sre="hai";
echo '<pre>';
var_dump($producto);
echo '</pre>';
$producto2 = new Producto();
$producto2->id = 77;
echo '<pre>';
var_dump($producto2);
echo '</pre>';
