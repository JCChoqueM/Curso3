<?php

use App\Propiedad;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

require '../../includes/app.php';

estaAutenticado();
/* BLOQUE varlidar la URL por ID válido [inicio]*/
$id = $_GET['id'] ?? null;
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
  header('Location: /admin');
}
/* !BLOQUE varlidar la URL por ID válido [fin]*/


/* BLOQUE obtener los datos de la propiedad [inicio]*/

$propiedad = Propiedad::find($id);
/* debuguear($propiedad); */

/* !BLOQUE obtener los datos de la propiedad [fin]*/

/* BLOQUE consultar para obtener los vendedores [inicio]*/
$consulta = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $consulta);
/* !BLOQUE consultar para obtener los vendedores [fin]*/

/* BLOQUE arreglo con mensajes de errores [inicio]*/

$errores = Propiedad::getErrores();


/* !BLOQUE arreglo con mensajes de errores [fin]*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  //Asignar los atributos
  $args = $_POST['propiedad'];

  $propiedad->sincronizar($args);

  // Validacion
  $errores = $propiedad->validar();

  //Subida de archivos
  //Genera un nombre único
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
  if ($_FILES['propiedad']['tmp_name']['imagen']) {
    $manager = new ImageManager(new GdDriver());
    $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->resize(800, 600);
    $propiedad->setImagen($nombreImagen);
  }
  if (empty($errores)) {
    //Almacenar la imagen
     if (isset($image)) {
        $image->save(CARPETA_IMAGENES . $nombreImagen);
    }

    $propiedad->guardar();
  }
}


incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Actualizar Propiedad</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>
  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form action="" class="formulario" method="POST" enctype="multipart/form-data">
    <?php include '../../includes/templates/formulario_propiedades.php'; ?>

    <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>