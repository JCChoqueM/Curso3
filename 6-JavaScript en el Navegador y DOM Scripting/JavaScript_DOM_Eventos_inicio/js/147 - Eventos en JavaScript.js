/*
//NOTE eventos

console.log(1); //se imprime primero
//section - load-onload
//window.onload = () => console.log('onload espera a que se carguen js css html'); //
//mirror - window.onload
window.addEventListener('load', imprimir);
//!mirror fin
//load y onload carga html,js,css,imagenes, etc asi que es el que mas tarda en cargar
// addEventListener como segundo parametro usa una funcion
//!section fin

console.log(5); //2do en imprimir

//section -  DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => console.log(4));
// DOMCcontentLoaded  carga html asi que se carga las antes
//!section fin

//section - funcion separada
function imprimir() {
  console.log('load espera que cargue js,css,html');
}
//!section fin

//section - imprimir scroll
window.onscroll = () => console.log('scroleando....');
//!section fin
*/
