<?php

declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado): string|int
{
    if ($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return 12;
    }
}
$usuario = usuarioAutenticado(false);
echo $usuario;




include 'includes/footer.php';
