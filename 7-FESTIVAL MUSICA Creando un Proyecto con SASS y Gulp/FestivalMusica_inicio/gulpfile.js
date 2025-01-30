const { src, dest, watch, parallel } = require('gulp'); //funciones que nos da gulp
/* SECTION css */
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
/* !SECTION fin css */

/* SECTION Imagenes */
const webp = require('gulp-webp').default; //funcion que se encarga de convertir imagenes en webp se debe poner .default ya que su funcion en node_modules-->index.js tiene "export default function gulpWebp(options) { "
/* !SECTION Imagenes */

/* SECTION funcion que transforma .scss a css */
function css(done) {
  src('src/scss/**/*.scss') //Identifica el archivo .scss a compilar
    /* prettier-ignore-start */
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError)) //Compilar el archivo .scss
    .pipe(dest('build/css')); //almacenarla en el disco duro
  /* prettier-ignore-end */
  done(); // callback
}
/* !SECTION fin - funcion que transforma .scss a css */

/* SECTION versionWebp  */
//REGISTRAR  o crear nueva tarea
function versionWebp(done) {
  /* section opciones de calidad que se pasaran a .pipe(webp()) */
  const opciones = {
    quality: 50,
  };
  /* !section fin - opciones de calidad que se pasaran a .pipe(webp()) */
  src('src/img/**/*.{jpg,png}') //{jpg,png}formatos a buscar
    /* prettier-ignore-start */
    .pipe(webp(opciones)) //convierte las imagenes en webp en memoria
    .pipe(dest('build/img')); // almacena las imagenes en el disco duro generado por .pipe(webp(opciones))
  /* prettier-ignore-end */
  done();
}
/* !SECTION fin - versionWebp  */

function dev(done) {
  watch('src/scss/**/*.scss', css);
  done();
}

/* SECTION  ejecutar varias tareas al mismo tiempo */
// hay 2 opciones series o parallel
//series una tarea se ejecuta despues de la otra en forma secuencial
//parallel todas las funciones se ejecutan al mismo tiempo
/* section2 hacer disponibles las funciones creadas */
// Exportar las funciones para que estén disponibles al ejecutar gulp
exports.css = css; // Exporta la función css
exports.versionWebp = versionWebp; // Exporta la función versionWebp
exports.dev = parallel(versionWebp, dev); // Exporta la función dev que ejecuta versionWebp y dev en paralelo dev a la misma ves trae a la funcion  css
/* !section2 fin - hacer disponibles las funciones creadas */
/* !SECTION fin - ejecutar varias tareas al mismo tiempo */
