<?php
require 'includes/app.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Contacto</h1>
  <picture>
    <source
      srcset="build/img/destacada.webp"
      type="image/webp" />
    <source
      srcset="build/img/destacada.avif"
      type="image/avif" />
    <img
      loading="lazy"
      width="200"
      height="300"
      src="build/img/destacada.jpg"
      alt="" />
  </picture>
  <h2>Llene el formulario de contacto</h2>
  <form
    action=""
    class="formulario">
    <fieldset>
      <legend>Informacion Personal</legend>
      <label for="nombre">Nombre:</label>
      <input
        type="text"
        id="nombre"
        placeholder="Tu Nombre"
        required />
      <label for="email">Email:</label>
      <input
        type="email"
        id="email"
        placeholder="Tu Email"
        required />
      <label for="telefono">Telefono:</label>
      <input
        type="tel"
        id="telefono"
        placeholder="Tu Telefono"
        required />
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje"></textarea>
    </fieldset>
    <fieldset>
      <legend>Informacion sobre Propiedad</legend>
      <label for="opciones">Vende o Compra:</label>
      <select id="opciones">
        <option
          value=""
          disabled
          selected>
          --Seleccione--
        </option>
        <option value="Compra">Compra</option>
        <option value="Vende">Vende</option>
      </select>
      <label for="presupuesto">Precio o Presupuesto:</label>
      <input
        type="number"
        id="presupuesto"
        placeholder="Tu Precio o Presupuesto" />
    </fieldset>
    <fieldset>
      <legend>Informacion sobre la Propiedad</legend>
      <p>Como desea ser contactado</p>
      <div class="forma-contacto">
        <label for="contactar-telefono">Telefono</label>
        <input
          type="radio"
          name="contacto"
          value="telefono"
          id="contactar-telefono" />
        <label for="contactar-email">Email</label>
        <input
          type="radio"
          name="contacto"
          value="email"
          id="contactar-email" />
      </div>
      <p>Si eligio telefono, elija la fecha y la hora</p>
      <label for="fecha">Fecha:</label>
      <input
        type="date"
        id="fecha"
        required />
      <label for="hora">Hora:</label>
      <input
        type="time"
        id="hora"
        min="09:00"
        max="18:00"
        required />
    </fieldset>
    <input
      type="submit"
      value="Enviar"
      class="boton boton-verde" />
  </form>
</main>
<?php
incluirTemplate('footer');
?>