//SECTION -  variables
const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');
//!SECTION  fin-variables

//SECTION - objeto datos
const datos = {
  nombre: '',
  email: '',
  mensaje: '',
};
//SECTION  fin-objetos datos

//SECTION - addEventListener
nombre.addEventListener('input', leeTexto);
email.addEventListener('input', leeTexto);
mensaje.addEventListener('input', leeTexto);
//!SECTION  fin-addEventListener

//SECTION - evento submit
formulario.addEventListener('submit', function (event) {
  event.preventDefault();
  //section - validar formulario
  const { nombre, email, mensaje } = datos;
  if (nombre === '' || email === '' || mensaje === '') {
    mostrarAlerta('Todos los campos son obligatorios', true);
    return; //temrina la funcion
  }
  //alerta de que se envio correctamente los datos
  mostrarAlerta('Mensaje enviado correctamente');
  //!section - fin validar formulario
});
//!SECTION  fin-evento submit

//SECTION - leer texto
function leeTexto(event) {
  datos[event.target.id] = event.target.value;
}
//!SECTION  fin-leer texto

function mostrarAlerta(mensaje, error = null) {
  const alerta = document.createElement('P');
  alerta.textContent = mensaje;
  if (error) {
    alerta.classList.add('error');
  } else {
    alerta.classList.add('correcto');
  }
  formulario.appendChild(alerta);
  //desaparesca despúes de x segundos
  setTimeout(() => {
    alerta.remove();
  }, 5000);
}
