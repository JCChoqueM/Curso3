<?php

include './includes/templates/header.php';
?>

<!-- BLOQUE main [inicio] -->
<main class="contenedor seccion">
  <!-- subBloque Conoce sobre nosotros [inicio]-->

  <h2>Conoce Sobre Nosotros</h2>
  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source
          srcset="build/img/nosotros.webp"
          type="image/webp" />
        <source
          srcset="build/img/nosotros.avif"
          type="image/avif" />
        <img
          loading="lazy"
          width="200"
          height="300"
          src="build/img/nosotros.jpg"
          alt="ima nosotros" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>25 años de Experiencia</blockquote>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quia voluptates. Quas excepturi accusantium neque officia
        laboriosam exercitationem, ipsam sequi delectus odit. Ipsum officiis est perspiciatis qui nobis architecto, veniam officia eius
        autem assumenda, eum esse nihil minus? Lorem ipsum dolor sit amet consectetur
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque magnam magni ratione cupiditate? Ipsa est tempora esse,
        nihil harum mollitia reprehenderit impedit omnis vel? Omnis, Officiis vitae provident labore accusamus dicta obcaecati repellat
        deleniti velit sint, consequuntur architecto. Iusto, fugiat officia.
      </p>
    </div>
  </div>
  <!-- !subBloque Conoce sobre nosotros [fin]-->
</main>
<!-- !BLOQUE main [fin] -->

<!-- BLOQUE Mas sobre nostros [inicio] -->
<section class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <!-- subBloque iconos [inicio] -->
  <div class="iconos-nosotros">
    <!-- subBloque2 iconos Seguridad [inicio] -->
    <div class="icono">
      <img
        src="build/img/icono11.svg"
        alt="Icono Seguridad"
        loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas excepturi accusantium neque officia laboriosam exercitationem,
        ipsam sequi delectus odit. Ipsum officiis est perspiciatis qui nobis architecto, veniam officia eius autem assumenda, eum esse
        nihil minus?
      </p>
    </div>
    <!-- !subBloque2 iconos Seguridad [fin] -->

    <!-- subBloque2 iconos Precio [inicio] -->
    <div class="icono">
      <img
        src="build/img/icono22.svg"
        alt="Icono Precio"
        loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas excepturi accusantium neque officia laboriosam exercitationem,
        ipsam sequi delectus odit. Ipsum officiis est perspiciatis qui nobis architecto, veniam officia eius autem assumenda, eum esse
        nihil minus?
      </p>
    </div>
    <!-- !subBloque2 iconos Precio [fin] -->

    <!-- subBloque2 iconos  A Tiempo [inicio] -->
    <div class="icono">
      <img
        src="build/img/icono33.svg"
        alt="Icono Tiempo"
        loading="lazy" />
      <h3>A Tiempo</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas excepturi accusantium neque officia laboriosam exercitationem,
        ipsam sequi delectus odit. Ipsum officiis est perspiciatis qui nobis architecto, veniam officia eius autem assumenda, eum esse
        nihil minus?
      </p>
    </div>
    <!-- !subBloque2 iconos  A Tiempo [fin] -->
    <!-- !subBloque iconos [fin] -->
  </div>
</section>
<!-- !BLOQUE Mas sobre nostros [fin] -->
<?php
include './includes/templates/footer.php';
?>