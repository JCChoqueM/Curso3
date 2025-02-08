document.addEventListener('DOMContentLoaded', function () {
  iniciarApp();
});
function iniciarApp() {
  crearGaleria();
}

function crearGaleria() {
  const galeria = document.querySelector('.galeria-imagenes');
  for (let i = 1; i <= 12; i++) {
    const imagen = document.createElement('picture');
    imagen.innerHTML = `
          <source srcset="build/img/thumb/${i}.avif" type="image/avif"/>
          <source srcset="build/img/thumb/${i}.webp" type="image/webp"          />
          <img loading="lazy" width="200" height="300" src="build/img/thumb/${i}.jpg" alt="imagen galeria ${i}" />`;
    imagen.onclick = function () {
      mostrarImagen(i);
    };
    galeria.appendChild(imagen);
  }
}
/* SECTION imagen */
function mostrarImagen(id) {
  const totalImágenes = 12; // Número total de imágenes

  const overlay = document.createElement('div');
  overlay.classList.add('overlay');

  const picture = document.createElement('picture');
  picture.innerHTML = `
    <source srcset="build/img/grande/${id}.avif" type="image/avif">
    <source srcset="build/img/grande/${id}.webp" type="image/webp">
    <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="imagen galeria ${id}">
  `;

  const cerrarModal = document.createElement('p');
  cerrarModal.textContent = 'X';
  cerrarModal.classList.add('btn-cerrar');

  const prevBtn = document.createElement('button');
  prevBtn.textContent = '◀';
  prevBtn.classList.add('btn-prev');

  const nextBtn = document.createElement('button');
  nextBtn.textContent = '▶';
  nextBtn.classList.add('btn-next');

  function cambiarImagen(offset) {
    let nextId = id + offset;

    if (nextId > totalImágenes) {
      nextId = 1;
    }
    if (nextId < 1) {
      nextId = totalImágenes;
    }

    picture.innerHTML = `
      <source srcset="build/img/grande/${nextId}.avif" type="image/avif">
      <source srcset="build/img/grande/${nextId}.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/grande/${nextId}.jpg" alt="imagen galeria ${nextId}">
    `;
    id = nextId;
  }

  prevBtn.addEventListener('click', () => cambiarImagen(-1));
  nextBtn.addEventListener('click', () => cambiarImagen(1));

  function manejarTeclado(e) {
    if (e.key === 'ArrowLeft') {
      cambiarImagen(-1);
    } else if (e.key === 'ArrowRight') {
      cambiarImagen(1);
    } else if (e.key === 'Escape') {
      cerrarModal.click();
    }
  }

  // Detectar swipe (deslizar) en dispositivos táctiles
  let touchStartX = 0;
  let touchEndX = 0;

  function handleTouchStart(e) {
    touchStartX = e.changedTouches[0].screenX;
  }

  function handleTouchEnd(e) {
    touchEndX = e.changedTouches[0].screenX;
    if (touchStartX - touchEndX > 50) {
      cambiarImagen(1); // Deslizar a la derecha (siguiente imagen)
    } else if (touchEndX - touchStartX > 50) {
      cambiarImagen(-1); // Deslizar a la izquierda (imagen anterior)
    }
  }

  overlay.addEventListener('touchstart', handleTouchStart);
  overlay.addEventListener('touchend', handleTouchEnd);

  overlay.appendChild(picture);
  overlay.appendChild(cerrarModal);
  overlay.appendChild(prevBtn);
  overlay.appendChild(nextBtn);

  overlay.addEventListener('click', (e) => {
    // Cerrar modal si se toca el overlay (área oscura fuera de la imagen) o el botón de cerrar
    if (e.target === overlay || e.target.classList.contains('btn-cerrar')) {
      document.body.classList.remove('fijar-body');
      overlay.remove();
      document.removeEventListener('keydown', manejarTeclado);
      overlay.removeEventListener('touchstart', handleTouchStart);
      overlay.removeEventListener('touchend', handleTouchEnd);
    }
  });

  // Manejar el botón de "Atrás" del móvil (usando popstate)
  window.history.pushState(null, null, window.location.href);
  window.addEventListener('popstate', () => {
    // Cuando el usuario presiona el botón de atrás en un móvil, se cierra el modal
    document.body.classList.remove('fijar-body');
    overlay.remove();
    document.removeEventListener('keydown', manejarTeclado);
    overlay.removeEventListener('touchstart', handleTouchStart);
    overlay.removeEventListener('touchend', handleTouchEnd);
  });

  // Agregar al body
  document.body.appendChild(overlay);
  document.body.classList.add('fijar-body');

  document.addEventListener('keydown', manejarTeclado);
}

/* function mostrarImagen(id) {
  const totalImágenes = 12; // Número total de imágenes

  const overlay = document.createElement('div');
  overlay.classList.add('overlay');

  const picture = document.createElement('picture');
  picture.innerHTML = `
    <source srcset="build/img/grande/${id}.avif" type="image/avif">
    <source srcset="build/img/grande/${id}.webp" type="image/webp">
    <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="imagen galeria ${id}">
  `;

  const cerrarModal = document.createElement('p');
  cerrarModal.textContent = 'X';
  cerrarModal.classList.add('btn-cerrar');

  const prevBtn = document.createElement('button');
  prevBtn.textContent = '◀';
  prevBtn.classList.add('btn-prev');

  const nextBtn = document.createElement('button');
  nextBtn.textContent = '▶';
  nextBtn.classList.add('btn-next');

  function cambiarImagen(offset) {
    let nextId = id + offset;

    if (nextId > totalImágenes) {
      nextId = 1;
    }
    if (nextId < 1) {
      nextId = totalImágenes;
    }

    picture.innerHTML = `
      <source srcset="build/img/grande/${nextId}.avif" type="image/avif">
      <source srcset="build/img/grande/${nextId}.webp" type="image/webp">
      <img loading="lazy" width="200" height="300" src="build/img/grande/${nextId}.jpg" alt="imagen galeria ${nextId}">
    `;
    id = nextId;
  }

  prevBtn.addEventListener('click', () => cambiarImagen(-1));
  nextBtn.addEventListener('click', () => cambiarImagen(1));

  function manejarTeclado(e) {
    if (e.key === 'ArrowLeft') {
      cambiarImagen(-1);
    } else if (e.key === 'ArrowRight') {
      cambiarImagen(1);
    } else if (e.key === 'Escape') {
      cerrarModal.click();
    }
  }

  // Detectar swipe (deslizar) en dispositivos táctiles
  let touchStartX = 0;
  let touchEndX = 0;

  function handleTouchStart(e) {
    touchStartX = e.changedTouches[0].screenX;
  }

  function handleTouchEnd(e) {
    touchEndX = e.changedTouches[0].screenX;
    if (touchStartX - touchEndX > 50) {
      cambiarImagen(1); // Deslizar a la derecha (siguiente imagen)
    } else if (touchEndX - touchStartX > 50) {
      cambiarImagen(-1); // Deslizar a la izquierda (imagen anterior)
    }
  }

  overlay.addEventListener('touchstart', handleTouchStart);
  overlay.addEventListener('touchend', handleTouchEnd);

  overlay.appendChild(picture);
  overlay.appendChild(cerrarModal);
  overlay.appendChild(prevBtn);
  overlay.appendChild(nextBtn);

  overlay.addEventListener('click', (e) => {
    if (e.target === overlay || e.target.classList.contains('btn-cerrar')) {
      document.body.classList.remove('fijar-body');
      overlay.remove();
      document.removeEventListener('keydown', manejarTeclado);
      overlay.removeEventListener('touchstart', handleTouchStart);
      overlay.removeEventListener('touchend', handleTouchEnd);
    }
  });

  document.body.appendChild(overlay);
  document.body.classList.add('fijar-body');

  document.addEventListener('keydown', manejarTeclado);
} */

/* 
function mostrarImagen(id) {
    // Crear el overlay
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    overlay.innerHTML = `
        <picture>
            <source srcset="build/img/grande/${id}.avif" type="image/avif">
            <source srcset="build/img/grande/${id}.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="imagen galeria ${id}">
        </picture>
        <p class="btn-cerrar">X</p>
    `;

    // Agregar evento para cerrar modal
    overlay.addEventListener('click', (e) => {
        if (e.target.classList.contains('overlay') || e.target.classList.contains('btn-cerrar')) {
            document.body.classList.remove('fijar-body');
            overlay.remove();
        }
    });

    // Agregar al body
    document.body.appendChild(overlay);
    document.body.classList.add('fijar-body');
}

*/

/* function mostrarImagen2(id) {
  const imagen = document.createElement('picture');

  imagen.innerHTML = `<source srcset="build/img/grande/${id}.avif" type="image/avif"/>
        <source srcset="build/img/grande/${id}.webp" type="image/webp"/>
        <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="imagen galeria ${id}"/>`;

  // section crea el Overlay con la imagen
  const overlay = document.createElement('DIV');
  overlay.appendChild(imagen);
  overlay.classList.add('overlay');
  overlay.onclick = function () {
    const body = document.querySelector('body');
    body.classList.remove('fijar-body');
    overlay.remove();
  };
  // !section fin - crea el Overlay con la imagen

  // section boton para cerrar el Modal
  const cerrarModal = document.createElement('P');
  cerrarModal.textContent = 'X';
  cerrarModal.classList.add('btn-cerrar');
  cerrarModal.onclick = function () {
    const body = document.querySelector('body');
    body.classList.remove('fijar-body');
    overlay.remove();
  };
  overlay.appendChild(cerrarModal);
  // !section boton para cerrar el Modal

  // section añadirlo al html
  const body = document.querySelector('body');
  body.appendChild(overlay);
  body.classList.add('fijar-body');
  // !section añadirlo al html
} */
/* !SECTION fin - imagen */
