<?php
//Abstraccion
declare(strict_types=1);

include 'includes/header.php';


class Producto
{
    public function __construct(
        public string $nombre,
        public int $precio,
        public bool $disponible,

    ) {}
    public function mostrarProducto()
    {
        echo "El producto es: {$this->nombre} y su precio es: {$this->precio}";
    }
}
$producto = new Producto('tablet', 200, true);
$producto->mostrarProducto();




echo '<pre>';
var_dump($producto);
echo '</pre>';

$producto2 = new Producto('TV curva classict', 700, false);
$producto2->mostrarProducto();
echo '<pre>';
var_dump($producto2);
echo '</pre>';


include 'includes/footer.php';
