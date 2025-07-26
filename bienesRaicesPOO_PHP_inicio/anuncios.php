<?php
require 'includes/app.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h2>Casa y Depas en Venta Anuncios</h2>
  <!-- BLOQUE Casas y Depas en Venta [inicio] -->
    
  <!-- subBloque .contenedor-anuncios [inicio] -->
  <?php

  include 'includes/templates/anuncios.php';
  ?>
  <!-- !subBloque .contenedor-anuncios [fin] -->


  <!-- !BLOQUE Casas y Depas en Venta [fin] -->
</main>
<?php
incluirTemplate('footer');
?>