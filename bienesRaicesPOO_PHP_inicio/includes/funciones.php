<?php
define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . '/funciones.php');
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');
function incluirTemplate(string $nombre, bool $inicio = false)
{
    /* echo (TEMPLATES_URL . "/$nombre.php");  */
    include TEMPLATES_URL . "/$nombre.php";
    // define('TEMPLATES_URL','/templates');   
    // include "includes/temaplates/$nombre.php";
}
function estaAutenticado()
{
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
}
/* function estaAutenticado(): bool
{
     session_start();
    $auth = $_SESSION['login'] ?? false;
    if ($auth) {
        return true;
    }
    return false;
} */
function debuguear($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

//Escapa el HTML
function s($html): string
{
    $s = htmlspecialchars($html);    
    return $s;
}