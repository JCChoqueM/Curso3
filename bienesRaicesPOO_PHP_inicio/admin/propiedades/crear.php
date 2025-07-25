<?php
require '../../includes/app.php';


use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;


estaAutenticado();



$propiedad = new Propiedad;

//Consulta para obtener los vendedores
$vendedores = Vendedor::all();


/* BLOQUE arreglo con mensajes de errores [inicio]*/
$errores = Propiedad::getErrores();


/* !BLOQUE arreglo con mensajes de errores [fin]*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  //Crea una nueva instancia
  $propiedad = new Propiedad($_POST['propiedad']);
  /*   debuguear($propiedad); */



  //Genera un nombre único
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

  //Setear la imagen
  //Realiza un resize a la imagen con intervention
  if ($_FILES['propiedad']['tmp_name']['imagen']) {
    $manager = new ImageManager(new GdDriver());
    $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->resize(800, 600);
    $propiedad->setImagen($nombreImagen);
  }

  //validar
  $errores = $propiedad->validar();




  if (empty($errores)) {

    //Crear la carpeta para subir imagenes
    if (!is_dir(CARPETA_IMAGENES)) {
      mkdir(CARPETA_IMAGENES);
    }

    //Guarda la imagen en el servidor
    $image->save(CARPETA_IMAGENES . $nombreImagen);

    //Guarda en la base de datos
    $propiedad->guardar();
  }
}


incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>
  <button type="button" class="boton boton-amarillo" id="auto-fill">Llenado Automático</button>
  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php " enctype="multipart/form-data">
    <?php include '../../includes/templates/formulario_propiedades.php'; ?>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>