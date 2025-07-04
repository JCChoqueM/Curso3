<?php
declare(strict_types=1);

include 'includes/header.php';
//Encapsulacion


class Producto
{
    // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
    // protected - Se puede acceder unicamente en la clase
    // private solo miembros de la misma clase pueden acceder a el
    public function __construct(
        public string $nombre,
        public int $precio,
        public bool $disponible,

    ) {}
    public function mostrarProducto():void
    {
        echo "El producto es: {$this->nombre} y su precio es: {$this->precio}";
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('tablet', 200, true);

$producto->mostrarProducto();
echo "<br>";
echo $producto->getNombre();
$producto->setNombre('nuevo producto');


echo '<pre>';
var_dump($producto);
echo '</pre>';

$producto2 = new Producto('TV curva classict', 700, false);
$producto2->mostrarProducto();
echo '<pre>';
var_dump($producto2);
echo '</pre>';


include 'includes/footer.php';
