<?php
/* REGLA 1-Importa la conexion*/
require __DIR__ . '/includes/config/database.php';
$db = conectarDB();

/* REGLA 2-Crear un email y password*/
$email = "correo@correo.com";

/* REGLA 3-consultar la Base de Datos*/
$password = "123";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
/* echo '<pre>';
var_dump($passwordHash);
echo '</pre>'; */

/* REGLA 3-Escribir query*/
$query = "INSERT INTO usuarios (email, password)
VALUES ('$email','$passwordHash');";
echo ($query);

/* REGLA 4-agregarlo a la Base de Datos*/
mysqli_query($db, $query);
