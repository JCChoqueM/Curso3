<?php
require '../../includes/funciones.php';


$auth = estaAutenticado();

if (!$auth) {
  header('Location: /');
}

/* BLOQUE varlidar la URL por ID válido [inicio]*/
$id = $_GET['id'] ?? null;
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
  header('Location: /admin');
}
/* !BLOQUE varlidar la URL por ID válido [fin]*/


/* var_dump($id); */
require '../../includes/config/database.php';
$db = conectarDB();

/* BLOQUE obtener los datos de la propiedad [inicio]*/
$consultaPropiedades = "SELECT * FROM propiedades WHERE id = $id";
$resultadoPropiedades = mysqli_query($db, $consultaPropiedades);
$propiedad = mysqli_fetch_assoc($resultadoPropiedades);
/* echo "<pre>";
var_dump($propiedad);
echo "</pre>"; */
/* !BLOQUE obtener los datos de la propiedad [fin]*/

/* BLOQUE consultar para obtener los vendedores [inicio]*/
$consulta = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $consulta);
/* !BLOQUE consultar para obtener los vendedores [fin]*/

/* BLOQUE arreglo con mensajes de errores [inicio]*/
$errores = [];
$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];

$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedores_id = $propiedad['vendedores_id'];
$imagenPropiedad = $propiedad['imagen'];
/* !BLOQUE arreglo con mensajes de errores [fin]*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {
/*   echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  exit; */
    echo "<pre>";
  var_dump($_FILES);
  echo "</pre>";
  $titulo = mysqli_real_escape_string($db,  $_POST['titulo']);
  $precio = mysqli_real_escape_string($db,     $_POST['precio']);

  $descripcion = mysqli_real_escape_string($db,     $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db,     $_POST['habitaciones']);
  $wc = mysqli_real_escape_string($db,     $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string($db,     $_POST['estacionamiento']);
  $vendedores_id = mysqli_real_escape_string($db,     $_POST['vendedores_id']);
  $creado = date('Y/m/d');

  $image = $_FILES['imagen'];


  if (empty($titulo)) {
    $errores[] = "Debes añadir un titulo";
  }
  if (empty($precio)) {
    $errores[] = "Debes añadir un precio";
  }
  if (strlen($descripcion) < 50) {
    $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
  }
  if (empty($habitaciones)) {
    $errores[] = "Debes añadir un numero de habitaciones";
  }
  if (empty($wc)) {
    $errores[] = "Debes añadir un numero de baños";
  }
  if (empty($estacionamiento)) {
    $errores[] = "Debes añadir un numero de estacionamientos";
  }
  if (empty($vendedores_id)) {
    $errores[] = "Debes Elejir un vendedor";
  }


  /* subBloque validar por tamaño(1 mb máximo) [inicio]*/
  $medida = 1000 * 1000;
  if ($image['size'] > $medida) {
    $errores[] = "La imagen es muy pesada";
  }
  /* !subBloque validar por tamaño(1 mb máximo) [fin]*/


  if (empty($errores)) {

    $carpetaImagenes = '../../imagenes/';
    if (!is_dir($carpetaImagenes)) {
      mkdir($carpetaImagenes);
    }

    if ($image['name']) {
    unlink($carpetaImagenes . $propiedad['imagen']);
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
    move_uploaded_file($image['tmp_name'], $carpetaImagenes . $nombreImagen);
    }else{
      $nombreImagen = $propiedad['imagen'];
    }

     /* subBloque2 subida de archivos [inicio]*/
     /* subBloque3 crear carpeta de imagenes [inicio]*/
     /* !subBloque3 crear carpeta de imagenes [fin]*
     /* subBloque3 generar un nombre unico [inicio]*/
     /*     var_dump($nombreImagen); */
     /* !subBloque3 generar un nombre unico [fin]*/
     /* subBloque3 subir la imagen [inicio]*/


    /* !subBloque3 subir la imagen [fin]*/
    /* !subBloque2 subida de archivos [fin]*/
    $query = "UPDATE propiedades SET titulo='$titulo', precio='$precio', imagen='$nombreImagen', descripcion='$descripcion', habitaciones=$habitaciones, wc=$wc, estacionamiento=$estacionamiento, vendedores_id=$vendedores_id WHERE id = $id";
/*     echo($query); */
  

    $resultado = mysqli_query($db, $query);
    if ($resultado) {
      header('Location: /admin?resultado=2');
    }
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
  <form action="" class="formulario" method="POST"  enctype="multipart/form-data">
    <fieldset>
      <legend>Informacion General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
      <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">
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
            <?php echo $row['nombre'] . "" . $row['apellido']; ?>
          </option>
        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>