<?php
require '../../includes/app.php';


use App\Propiedad;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;



/* $auth = estaAutenticado(); */

estaAutenticado();

/* if (!$auth) {
  header('Location: /');
} */

$db = conectarDB();
/* BLOQUE consultar para obtener los vendedores [inicio]*/
$consulta = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $consulta);
/* !BLOQUE consultar para obtener los vendedores [fin]*/

/* BLOQUE arreglo con mensajes de errores [inicio]*/ 
$errores = Propiedad::getErrores();


$titulo = '';
$precio = '';

$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';
/* !BLOQUE arreglo con mensajes de errores [fin]*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  //Crea una nueva instancia
  $propiedad = new Propiedad($_POST);

  echo "<hr>";
  echo '<pre>';
  var_dump($propiedad);
  echo '</pre>';


  //Genera un nombre único
  $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

  //Setear la imagen
  //Realiza un resize a la imagen con intervention
  if ($_FILES['imagen']['tmp_name']) {
    $manager = new ImageManager(new GdDriver());
    $image = $manager->read($_FILES['imagen']['tmp_name'])->resize(800, 600);
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
    $resultado = $propiedad->guardar();
    //Mensaje de exito
    if ($resultado) {
      header('Location: /admin?resultado=1');
    }
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
    <fieldset>
      <legend>Informacion General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>vendedores_id</legend>
      <select name="vendedores_id" id="vendedores_id">
        <option value="">--Seleccione--</option>
        <?php while ($row = mysqli_fetch_assoc($resultadoVendedores)): ?>
          <option
            <?php echo $vendedores_id === $row['id'] ? 'selected' : ''; ?>
            value="<?php echo $row['id']; ?>">
            <?php echo $row['nombre'] . " " . $row['apeliido']; ?>
          </option>
        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>