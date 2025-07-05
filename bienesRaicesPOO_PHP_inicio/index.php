<?php
require 'includes/app.php';
incluirTemplate('header', $inicio = true);
?>
<!-- BLOQUE main [inicio] -->
<main class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <!-- subBloque iconos [inicio] -->
  <div class="iconos-nosotros">
    <!-- subBloque2 icono Seguridad [inicio] -->
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
    <!-- !subBloque2 icono Seguridad [fin] -->
    <!-- subBloque2 icono Precio [inicio] -->
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
    <!-- !subBloque2 icono Precio [fin] -->
    <!-- subBloque2 icono Tiempo [inicio] -->
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
    <!-- !subBloque2 icono Tiempo [fin] -->
  </div>
  <!-- !subBloque iconos [fin] -->
</main>
<!-- !BLOQUE main [fin] -->

<!-- BLOQUE Casas y Depas en Venta [inicio] -->
<section class="seccion contenedor">
  <h2>Casas y Depas en Venta</h2>
  <!-- subBloque contenedor-anuncios [inicio] -->
  <?php
  $limite = 3;
  include 'includes/templates/anuncios.php';
  ?>
  <!-- !subBloque contenedor-anuncios [fin] -->
  <div class="alinear-derecha">
    <a
      href="anuncios.php"
      class="boton-verde">Ver Todas</a>
  </div>
</section>
<!-- !BLOQUE Casas y Depas en Venta [fin] -->

<!-- BLOQUE imagen-contacto [inicio] -->
<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
  <a
    href="contacto.php"
    class="boton-amarillo">Contactános</a>
</section>
<!-- !BLOQUE imagen-contacto [fin] -->

<!-- BLOQUE inferior [inicio] -->
<div class="contenedor seccion seccion-inferior">
  <!-- subBloque blog [inicio] -->
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <!-- subBloque2 entrada-blog Terraza [inicio] -->
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source
            srcset="build/img/blog1.webp"
            type="image/webp" />
          <source
            srcset="build/img/blog1.avif"
            type="image/avif" />
          <img
            loading="lazy"
            width="200"
            height="300"
            src="build/img/blog1.jpg "
            alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p informacion-meta>Escrito el: <span>20/10/2025</span> por: <span>Admin</span></p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y acabados, asi como los mejores
            precios.
          </p>
        </a>
      </div>
    </article>
    <!-- !subBloque2 entrada-blog Terraza [fin] -->
    <!-- subBloque2 entrada-blog Decoracion [inicio] -->
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source
            srcset="build/img/blog2.webp"
            type="image/webp" />
          <source
            srcset="build/img/blog2.avif"
            type="image/avif" />
          <img
            loading="lazy"
            width="200"
            height="300"
            src="build/img/blog2.jpg "
            alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guia para la decoración de tu hogar</h4>
          <p informacion-meta>Escrito el: <span>20/10/2025</span> por: <span>Admin</span></p>
          <p>maximiza el espacio de en tu hogar con esta guia,aprende a combinar muebles y colores para darle vida a tu espacio</p>
        </a>
      </div>
    </article>
    <!-- !subBloque2 entrada-blog Decoracion [fin] -->
  </section>
  <!-- !subBloque blog [fin] -->
  <!-- subBloque testimoniales [inicio] -->
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal de Bienes Raices fue muy profesional y me ayudaron a encontrar la casa de mis sueños. ¡Estoy muy feliz con mi
        compra!
      </blockquote>
      <p>-Julio Cesar</p>
    </div>
  </section>
  <!-- !subBloque testimoniales [fin] -->
</div>
<!-- !BLOQUE inferior [fin] -->

<!-- BLOQUE footer [inicio] -->
<?php
incluirTemplate('footer');
?>
<!-- !BLOQUE footer [fin] -->