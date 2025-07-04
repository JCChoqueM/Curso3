<?php
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if (!$id) {
  header('Location: /');
}

/* REGLA 1-Importa la conexion*/
require __DIR__ . '/includes/config/database.php';
$db = conectarDB();
/* REGLA 2-Escribir query*/
$query = "SELECT * FROM propiedades where id = $id";
/* REGLA 3-consultar la Base de Datos*/
$resultadoConsulta = mysqli_query($db, $query);
if (!$resultadoConsulta->num_rows) {
  header('Location: /');
}

$propiedad = mysqli_fetch_assoc($resultadoConsulta);

require 'includes/funciones.php';
incluirTemplate('header');
?>

<!--REGLA_ 4-mostrar resultados[inicio]  -->
<main class="contenedor contenido-centrado">

  <h1><?php echo $propiedad['titulo']; ?></h1>
  <div class="anuncio">
    <img
      loading="lazy"
      width="200"
      height="300"
      src="/imagenes/<?php echo $propiedad['imagen']; ?>"
      alt="imagen de la propiedad" />

    <div class="resumen-propiedad">
      <p class="precio">$<?php echo $propiedad['precio']; ?></p>
      <ul class="iconos-caracteristicas">
        <li>
          <img
            class="icono"
            src="build/img/icono_wc.svg"
            alt="icono wc" />
          <p><?php echo $propiedad['wc']; ?></p>
        </li>
        <li>
          <img
            class="icono"
            src="build/img/icono_estacionamiento.svg"
            alt="icono estacionamiento" />
          <p><?php echo $propiedad['estacionamiento']; ?></p>
        </li>
        <li>
          <img
            class="icono"
            src="build/img/icono_dormitorio.svg"
            alt="icono dormitorio" />
          <p><?php echo $propiedad['habitaciones']; ?></p>
        </li>
      </ul>
      <p>
        <?php echo $propiedad['descripcion']; ?>
      </p>

    </div>
  </div>


</main>

<!--!REGLA_ 4-mostrar resultados [fin]  -->

<!--REGLA 5-Cerrar la conexion  -->
<?php
mysqli_close($db);
?>

<?php
incluirTemplate('footer');
?>
