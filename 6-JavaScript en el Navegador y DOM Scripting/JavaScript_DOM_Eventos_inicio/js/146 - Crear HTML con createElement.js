//NOTE generar un nuevo enlace
//SECTION - crear un nuevo enlace
// #region Modelo enlace  a crear
/*<a
  href="creado.html"
  class="nuevo-creado"
>
  Nuevo texto
</a>;*/
// #endregion
//section - crear nueva etiqueta
const nuevoEnlace = document.createElement('A');
/*<a></a></a>;*/
//!section fin crear nueva etiqueta

//section - añadiendo href
nuevoEnlace.href = 'creado.html';
/*<a
  href="creado.html"
>
</a>;*/
//!section - añadiendo href

//section - añadiendo class
nuevoEnlace.classList = 'nuevo-creado';
/*<a
  href="creado.html"
  class="nuevo-creado"
>
</a>;*/
//!section - añadiendo class

//section - añadiendo texto
nuevoEnlace.textContent = 'Nuevo texto';
/*<a
  href="creado.html"
  class="nuevo-creado"
>
  Nuevo texto
</a>;*/
//!section - añadiendo texto
//!SECTION fin crear un nuevo enlace

//SECTION - Agregar o insertar al Documento
const navegacion = document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace);

//!SECTION fin Agregar o insertar al Documento
