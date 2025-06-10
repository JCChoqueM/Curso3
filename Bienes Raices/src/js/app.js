document.addEventListener('DOMContentLoaded', function () {
  eventListener();
  darkMode();
});
function darkMode() {
  const darkMode = document.querySelector('.dark-mode-boton');
  darkMode.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode'); // añade o quita la clase

  });
}
function eventListener() {
  const mobileMenu = document.querySelector('.mobile-menu');
  mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
  const navegacion = document.querySelector('.navegacion');

  navegacion.classList.toggle('mostrar'); /* añade o quita la clase */
  /*  if (navegacion.classList.contains('mostrar')) {
   navegacion.classList.remove('mostrar');
  } else {
   navegacion.classList.add('mostrar');
  } */
}
