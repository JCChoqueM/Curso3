/* //SECTION -  variables
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
  console.log(datos);
  if (nombre === '' || email === '' || mensaje === '') {
    mostrarError('Todos los campos son obligatorios');
    return; //temrina la funcion
  }
  //alerta de que se envio correctamente los datos
  mostrarCorrecto('Mensaje enviado correctamente');
  //!section - fin validar formulario
});
//!SECTION  fin-evento submit

//SECTION - leer texto
function leeTexto(event) {
  datos[event.target.id] = event.target.value;
  console.log(datos);
}
//!SECTION  fin-leer texto

//SECTION - mostrar por pantallaError
//muestra un error en pantalla
function mostrarError(mensaje) {
  const error = document.createElement('P');
  error.textContent = mensaje;
  error.classList.add('error');

  formulario.appendChild(error);
  //desaparesca despúes de x segundos
  setTimeout(() => {
    error.remove();
  }, 5000);
}
//!SECTION fin-mostrar por pantallaError

//SECTION - mostrar por pantallaCorrecto
//muestra una alerta d que se envio correctamente
function mostrarCorrecto(mensaje) {
  const alerta = document.createElement('P');
  alerta.textContent = mensaje;
  alerta.classList.add('correcto');

  formulario.appendChild(alerta);
  //desaparesca despúes de x segundos
  setTimeout(() => {
    alerta.remove();
  }, 5000);
}
//!SECTION fin-mostrar por pantallaCorrecto
 */