const datos = {
  nombre: '',
  email: '',
  mensaje: '',
};

const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');

nombre.addEventListener('input', leeTexto);

email.addEventListener('input', leeTexto);

mensaje.addEventListener('input', leeTexto);

// El evento de Submit
formulario.addEventListener('submit', function (event) {
  event.preventDefault();
  //validar el formulario
  const { nombre, email, mensaje } = datos;
  if (nombre === '' || email === '' || mensaje === '') {
    mostrarError('Todos los campos son obligatorios');
    return;
  }
  //enviar el formulario
  console.log('enviando el formulario');
});

function leeTexto(event) {
  datos[event.target.id] = event.target.value;
}

//muestra un error en pantalla
function mostrarError(mensaje) {
  const error = document.createElement('P');
  error.textContent = mensaje;
  error.classList.add('error');

  formulario.appendChild(error);
  //desaparesca despúes de x segundos
  setTimeout(() => {
    nombre.remove();
    console.log(error);
  }, 5000);
}
