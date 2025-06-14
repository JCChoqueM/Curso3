<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Crear</h1>
  <a href="/admin" class="boton boton-verde">Volver</a>
  <form action="" class="formulario">
    <fieldset>
      <legend>Informacion General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad" value="">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">

      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion" name="propiedad[descripcion]"></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="Ej: 3" min="1" max="9" value="">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="propiedad[wc]" placeholder="Ej: 3" min="1" max="9" value="">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="Ej: 3" min="1" max="9" value="">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>
      <select>
        <option value="1">Juan</option>
        <option value="2">kARE</option>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>