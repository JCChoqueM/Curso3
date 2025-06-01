<?php include 'includes/header.php';
$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen' ) ;

// Empty - Revisa si un arreglo esta vacio
var_dump( empty($clientes) );
var_dump( empty($clientes2) );
var_dump( empty($clientes3) );
echo "<br>";
echo "Clientes 4: <br>";
var_dump( empty($clientes42) );
echo "<br> este";
var_dump(($clientes42) );

// Isset - Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump( isset($clientes) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );
var_dump( isset($clientes4) );


include 'includes/footer.php';