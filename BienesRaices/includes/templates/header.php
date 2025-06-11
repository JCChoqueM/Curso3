<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices </title>
    <link
        rel="stylesheet"
        href="/curso3/BienesRaices/build/css/app.css" />
</head>

<body>
    <!-- BLOQUE header [inicio] -->
    <header class="header <?php echo isset($inicio) ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <!-- subBloque barra [inicio] -->
            <div class="barra">
                <!-- subBloque2 logo BienesRaices [inicio] -->
                <a href="/curso3/BienesRaices/index.php">
                    <img
                        src="build/img/logo.svg"
                        alt="Logotipo de Bienes Raices" />
                </a>
                <!-- !subBloque2 logo BienesRaices [fin] -->
                <div class="mobile-menu">
                    <img
                        src="build/img/barras.svg"
                        alt="icono menu responsive" />
                </div>
                <!-- subBloque2 navegacion [inicio] -->
                <div class="derecha">
                    <img
                        src="build/img/dark-mode.svg"
                        class="dark-mode-boton" />
                    <nav class="navegacion">
                        <a href="nosotros.php"> Nosotros</a>
                        <a href="anuncios.php">Anuncio</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
                <!-- !subBloque2 navegacion [fin] -->
            </div>
            <!-- !subBloque barra [fin] -->
            <?php if (isset($inicio)) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>
    <!-- !BLOQUE header [fin] -->