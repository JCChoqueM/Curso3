<?php

declare(strict_types=1);

include 'includes/header.php';

//Metodos Estaticos

class Producto
{
    /*     public $imagen; */
    public static $imagenPlaceholder = "imagen.jpg";

    public function __construct(
        public string $nombre,
        public int $precio,
        public bool $disponible,
        string $imagen
    ) {
        if ($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }
    public static function obtenerImagenProducto()
    {
        return self::$imagenPlaceholder;
    }
    /*     public function mostrarProducto(): void
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
    } */
}

echo Producto::obtenerImagenProducto();
echo "<br>";
$producto = new Producto('tablet', 200, true, '');
echo $producto->obtenerImagenProducto();

/* $producto->mostrarProducto(); */
/* echo "<br>";
echo $producto->getNombre();
$producto->setNombre('nuevo producto');


echo '<pre>';
var_dump($producto);
echo '</pre>';
 */
$producto2 = new Producto('TV curva classict', 700, false, 'monitricito.jpg');
echo "<br>";
echo $producto2->obtenerImagenProducto();
/* $producto2->mostrarProducto();
echo '<pre>';
var_dump($producto2);
echo '</pre>'; */


include 'includes/footer.php';
