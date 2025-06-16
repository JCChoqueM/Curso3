<?php
require '../../includes/config/database.php';
$db = conectarDB();
/* BLOQUE consultar para obtener los vendedores [inicio]*/
$consulta = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $consulta);
/* !BLOQUE consultar para obtener los vendedores [fin]*/

/* BLOQUE arreglo con mensajes de errores [inicio]*/
$errores = [];
$titulo = '';
$precio = '';

$descripcion = '';
$habitaciones = '';
$wc = $_POST['wc'];
$estacionamiento = '';
$vendedores_id = '';
/* !BLOQUE arreglo con mensajes de errores [fin]*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {


  /* 
    echo "<pre>";
  var_dump($_POST);
  echo "</pre>"; */
  $titulo = mysqli_real_escape_string($db,  $_POST['titulo']);
  $precio = mysqli_real_escape_string($db,     $_POST['precio']);

  $descripcion = mysqli_real_escape_string($db,     $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db,     $_POST['habitaciones']);
  $wc = mysqli_real_escape_string($db,     $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string($db,     $_POST['estacionamiento']);
  $vendedores_id = mysqli_real_escape_string($db,     $_POST['vendedores_id']);
  $creado = date('Y/m/d');

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
  if (empty($errores)) {
    $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc,
   estacionamiento,creado,vendedores_id) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamiento', '$creado','$vendedores_id')";
    /*   var_dump($query); */
    $resultado = mysqli_query($db, $query);
    if ($resultado) {
      header('Location: /admin');
    }
  }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>
  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php">
    <fieldset>
      <legend>Informacion General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

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

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>