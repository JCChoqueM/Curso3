<?php include 'includes/header.php';


$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 300,
        'disponible' => true

    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 400,
        'disponible' => false
    ]
];
echo "<pre>";



$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);


echo "<br>";
echo "----------";
echo "<br>";
/* var_dump($json_array); */
echo $json_array[0]->nombre;
echo "<br>";
echo $json_array[0]->precio;
echo "<br>";
var_dump( $json_array[0]->disponible);
echo "</pre>";


include 'includes/footer.php';
