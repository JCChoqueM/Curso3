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
  console.log(datos)
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

/*
class Mensaje {
  constructor(formulario) {
    this.formulario = formulario;
  }

  mostrar(mensaje, tipo) {
    const parrafo = document.createElement('P');
    parrafo.textContent = mensaje;
    parrafo.classList.add(tipo);

    this.formulario.appendChild(parrafo);
    this._desaparecer(parrafo, 5000);
  }

  _desaparecer(elemento, tiempo) {
    setTimeout(() => {
      elemento.remove();
    }, tiempo);
  }
}

// Uso de la clase Mensaje
const formulario = document.getElementById('miFormulario'); // Asumiendo que hay un formulario en el DOM
const mensaje = new Mensaje(formulario);

// Mostrar un error
mensaje.mostrar('Ha ocurrido un error', 'error');

// Mostrar un mensaje correcto
mensaje.mostrar('Envío realizado correctamente', 'correcto');

*/
