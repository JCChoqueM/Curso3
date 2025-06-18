<?php
/* echo "<pre>";
var_dump($_GET);
echo "</pre>";  
exit; */

$resultado = $_GET['resultado'] ?? null;
/* var_dump($resultado); */
require '../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Administrador de Bienes Raices</h1>
  <?php
  if (intval($resultado) === 1) :   ?>
    <p class="alerta exito">Creado Correctamente</p>
  <?php endif; ?>
  <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

  <table class="propiedades">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Imagen</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Casa en la playa</td>
        <td><img src="/imagenes/1d22e29869b0c0974d16cb035d94a361.jpg" class="imagen-tabla"</td>
        <td>$21000</td>
        <td>
            <a href="#" class="boton-rojo-block">Eliminar</a>
            <a href="#" class="boton-amarillo-block">Actualizar</a>
        </td>
       
      </tr>
    </tbody>
  </table>
</main>
<?php
incluirTemplate('footer');
?>