const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
//identifica el archivo SASS
//function css(done) {
//identifica el archivo SASS
//compilarlo
//almacenamiento en el disco duro
//  src('src/scss/**/*.scss').pipe(sass()).pipe(dest('build/css'));
//  done(); //callback que avisa a gulp que se termino la tarea
//}
function css(done) {
  src('src/scss/**/*.scss').pipe(plumber()).pipe(sass().on('error', sass.logError)).pipe(dest('build/css'));
  done(); // callback
}
function dev(done) {
  watch('src/scss/**/*.scss', css);
  done();
}

exports.dev = dev;
exports.css = css;
