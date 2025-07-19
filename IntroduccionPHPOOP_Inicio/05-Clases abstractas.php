<?php

declare(strict_types=1);

include 'includes/header.php';

//Herencia

abstract class Transporte
{
    public function __construct(
        protected int $ruedas,
        protected int $capacidad
    ) {}
    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}
class Bicicleta extends Transporte
{
    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA";
    }
}
class Automovil extends Transporte
{
    public function __construct(
        int $ruedas,
        int $capacidad,
        protected string $transmision
    ) {
        parent::__construct($ruedas, $capacidad);
    }
    public function getTransmision(): string
    {
        return $this->transmision;
    }
}
/* $transporte = new Transporte(2, 4);
echo $transporte->getInfo(); */

echo "<hr>";
$bicicleta = new Bicicleta(2, 2);
echo $bicicleta->getInfo();
echo "<hr>";
echo $bicicleta->getRuedas();
echo "<hr>";
$automovil = new Automovil(4, 4, "manual");
echo $automovil->getInfo();
echo "<hr>";
echo $automovil->getTransmision();


include 'includes/footer.php';
