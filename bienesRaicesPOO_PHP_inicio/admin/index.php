<?php
require '../includes/app.php';

use App\Propiedad;
/* session_start(); */

estaAutenticado();
//implementar un metodo para obtener todas las propiedades

$propiedades = Propiedad::all();


$resultado = $_GET['resultado'] ?? null;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if ($id) {

    $propiedad = Propiedad::find($id);
    
    $propiedad->eliminar();

  
 
  
  }
}

/* var_dump($resultado); */

incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Administrador de Bienes Raice</h1>
  <?php
  if (intval($resultado) === 1) :
  ?>
    <p class="alerta exito">Creado Correctamente</p>
  <?php
  elseif (intval($resultado) === 2) :
  ?>
    <p class="alerta exito amarillo">Actualizado Correctamente</p>
  <?php
  elseif (intval($resultado) === 3) :
  ?>
    <p class="alerta exito rojo">Eliminado Correctamente</p>
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
      <?php foreach ($propiedades as $propiedad): ?>

        <tr>
          <td><?php echo $propiedad->id; ?></td>
          <td><?php echo $propiedad->titulo; ?></td>
          <td><img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla" /></td>
          <td>$<?php echo $propiedad->precio; ?></td>
          <td>
            <form method="POST" class="w-100">
              <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
              <input type="submit" class="boton-rojo-block" value="Eliminar">
            </form>
            <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
          </td>
        </tr>
      <?php endforeach; ?>
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