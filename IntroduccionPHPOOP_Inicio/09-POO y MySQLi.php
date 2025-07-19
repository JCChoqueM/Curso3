<?php include 'includes/header.php';

//Conexion a la base de datos
$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');
// Creamos la consulta
$query = "SELECT titulo, imagen FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($titulo, $imagen);

//Asignamos el resultado
/* $stmt->fetch(); */


//imprimimos el resultado
while ($stmt->fetch()):
echo "<hr>";
var_dump($titulo);
echo "<br>";
var_dump($imagen);



endwhile;















include 'includes/footer.php';
