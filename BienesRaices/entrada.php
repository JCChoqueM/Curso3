<?php 
include './includes/templates/header.php';
?>
    <main class="contenedor contenido-centrado">
      <h1>Guia de decoración de tu hogar</h1>
  
      <picture>
        <source
          srcset="build/img/destacada2.webp"
          type="image/webp"
        />
        <source
          srcset="build/img/destacada2.avif"
          type="image/avif"
        />
        <img
          loading="lazy"
          width="200"
          height="300"
          src="build/img/destacada2.jpg"
          alt="imagen de la propiedad"
        />
      </picture>
          <p class="informacion-meta">Escrito el: <span>20/10/2025</span> por: <span>Admin</span></p>
      <div class="resumen-propiedad">
   
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
    </main>
    <footer class="footer seccion">
      <div class="contenedor contenedor--footer">
        <nav class="navegacion">
          <a href="nosotros.html"> Nosotros</a>
          <a href="anuncios.html">Anuncio</a>
          <a href="blog.html">Blog</a>
          <a href="contacto.html">Contacto</a>
        </nav>
      </div>
      <p class="copyrigth">Todos los derechos reservados &copy</p>
    </footer>
    <script src="build/js/modernizr.js"></script>
        <script src="build/js/app.js"></script>
  </body>
</html>
