<?php include 'includes/header.php';

//Conexion a la base de datos
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

//Creamos el query
$query = "SELECT * FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Obtener los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Iterar
foreach ($resultado as $propiedad):
    echo "<hr>";
    echo $propiedad['titulo'] . '<br>';
    echo $propiedad['imagen'] . '<br>';
    echo $propiedad['precio'] . '<br>';
    echo $propiedad['habitaciones'] . '<br>';
endforeach;
/* echo '<pre>';
var_dump($resultado);
echo '</pre>'; */




include 'includes/footer.php';

/* $propiedades = $db->query($query)->fetch();
echo "<hr>";
echo "fetch";
echo '<pre>';
var_dump($propiedades);
echo '</pre>';
echo "<hr>";
$propiedades = $db->query($query)->fetchAll();
echo "<hr>";
echo "fetchAll";
echo '<pre>';
var_dump($propiedades);
echo '</pre>';
echo "<hr>";
$propiedades = $db->query($query)->fetchColumn();
echo "<hr>";
echo "fetchColumn";
echo '<pre>';
var_dump($propiedades);
echo '</pre>';
echo "<hr>";
$propiedades = $db->query($query)->fetchObject();
echo "<hr>";
echo "fetchObject";
echo '<pre>';
var_dump($propiedades);
echo '</pre>';
echo "<hr>"; */