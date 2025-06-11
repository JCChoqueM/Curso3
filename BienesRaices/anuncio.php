<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor contenido-centrado">
  <h1>Casa en Venta frente al bosque</h1>
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
      alt="imagen de la propiedad" />
  </picture>
  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>
    <ul class="iconos-caracteristicas">
      <li>
        <img
          class="icono"
          src="build/img/icono_wc.svg"
          alt="icono wc" />
        <p>3</p>
      </li>
      <li>
        <img
          class="icono"
          src="build/img/icono_estacionamiento.svg"
          alt="icono estacionamiento" />
        <p>3</p>
      </li>
      <li>
        <img
          class="icono"
          src="build/img/icono_dormitorio.svg"
          alt="icono dormitorio" />
        <p>4</p>
      </li>
    </ul>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quia voluptates. Quas excepturi accusantium neque officia
      laboriosam exercitationem, ipsam sequi delectus odit. Ipsum officiis est perspiciatis qui nobis architecto, veniam officia eius
      autem assumenda, eum esse nihil minus? Lorem ipsum dolor sit amet consectetur
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque magnam magni ratione cupiditate? Ipsa est tempora esse, nihil
      harum mollitia reprehenderit impedit omnis vel? Omnis, Officiis vitae provident labore accusamus dicta obcaecati repellat deleniti
      velit sint, consequuntur architecto. Iusto, fugiat officia.
    </p>
  </div>
</main>
<?php
include './includes/templates/footer.php';
?>