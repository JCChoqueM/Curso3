<?php include 'includes/header.php';

$numero1 = 10;
$numero2 = 20;
echo "Suma: " . ($numero1 + $numero2) . "<br>";
echo "Resta: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "División: " . ($numero1 / $numero2) . "<br>";
echo "Módulo: " . ($numero1 % $numero2) . "<br>";
echo "Incremento: " . (++$numero1) . "<br>";
echo "Decremento: " . (--$numero2) . "<br>";
echo "Comparación (==): " . ($numero1 == $numero2 ? 'Iguales' : 'Diferentes') . "<br>";
echo $numero1."<br>";
echo "potenciación: " . ($numero1 ** 3) . "<br>";
var_dump(pow($numero1, 3));

include 'includes/footer.php';