<?php
require '../../includes/app.php';


use App\Vendedor;

estaAutenticado();




//Consulta para obtener los vendedores
$vendedor = new Vendedor;

$errores = Vendedor::getErrores();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
//Crear una nueva instancia

  $vendedor = new Vendedor($_POST['vendedor']);
//Validar que no haya campos vacios
  $errores = $vendedor->validar();
   if (empty($errores)) {
    $vendedor->guardar();
  }
}


incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Registrar Vendedor(a)</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>
  <button type="button" class="boton boton-amarillo" id="auto-fill">Llenado Automático</button>
  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form action="" class="formulario" method="POST" action="/admin/vendedores/crear.php ">
    <?php include '../../includes/templates/formulario_vendedores.php'; ?>

    <input type="submit" value="Registrar Vendedor" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>