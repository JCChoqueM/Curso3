<?php include 'includes/header.php';

$nombreCliente = "Julio   cesar";
echo strlen($nombreCliente) . "<br>";
var_dump($nombreCliente);
echo "<br>";

echo "trim: <br>";
$texto = trim($nombreCliente);
echo strlen($texto) . "<br>";
var_dump($texto);
echo "<br>";
echo "que es esto <br>";
$que = strlen($nombreCliente);
echo $que;

include 'includes/footer.php';
