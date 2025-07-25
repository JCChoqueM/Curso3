<?php
require '../../includes/app.php';


use App\Vendedor;

estaAutenticado();




//Consulta para obtener los vendedores
$vendedor = new Vendedor;



$errores = Vendedor::getErrores();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

}


incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Actualizar Vendedor(a)</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>
  <button type="button" class="boton boton-amarillo" id="auto-fill">Llenado Automático</button>
  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form action="/admin/vendedores/actualizar.php" class="formulario" method="POST" action="/admin/vendedores/crear.php ">
    <?php include '../../includes/templates/formulario_vendedores.php'; ?>
 
    <input type="submit" value="Guardar Cambios" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>