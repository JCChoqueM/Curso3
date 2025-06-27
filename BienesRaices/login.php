<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Iniciar Sesión</h1>
  <form action="" class="formulario contenido-centrado">
     <fieldset>
      <legend>Login y Password</legend>

      <label for="email">Email:</label>
      <input
        type="email"
        id="email"
        placeholder="Tu Email"
        required />
      <label for="password">Password:</label>
      <input
        type="password"
        id="password"
        placeholder="Tu password"
        required />
    </fieldset>
    <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>