<?php
/* BLOQUE 1-Importa la conexion [inicio]*/
require '../includes/config/database.php';
$db = conectarDB();
/* !BLOQUE 1-Importa la conexion [fin]*/

/* BLOQUE 2-escribir query [inicio]*/
$query = "SELECT * FROM propiedades";
/* !BLOQUE 2-escribir query [fin]*/

/* BLOQUE 3-consultar la BD [inicio]*/
$resultadoConsulta = mysqli_query($db, $query);
/* !BLOQUE 3-consultar la BD [fin]*/
/* echo '<pre>';
print_r($resultadoConsulta['num_rows']);
echo '</pre>'; */

/* echo '<pre>';
var_dump(mysqli_fetch_assoc($resultadoConsulta)['titulo']);
echo '</pre>'; */

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
  <?php elseif (intval($resultado) === 2) : ?>
    <p class="alerta exito amarillo">Actualizado Correctamente</p>
  <?php elseif (intval($resultado) === 3) : ?>
    <p class="alerta exito">Eliminado Correctamente</p>
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
    <!-- BLOQUE 4-Mostrar los resultado [inicio]-->
    <tbody>
      <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>

        <tr>
          <td><?php echo $propiedad['id']; ?></td>
          <td><?php echo $propiedad['titulo']; ?></td>
          <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla" /></td>
          <td>$<?php echo $propiedad['precio']; ?></td>
          <td>
            <a href="#" class="boton-rojo-block">Eliminar</a>
            <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
    <!-- !BLOQUE 4-Mostrar los resultado [fin]-->

  </table>
</main>
<?php

/* BLOQUE 5-cerrar la conexión [inicio]*/
mysqli_close($db);
/* !BLOQUE 5-cerrar la conexión [fin]*/
incluirTemplate('footer');
?>