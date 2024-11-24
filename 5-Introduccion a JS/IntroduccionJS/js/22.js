// Array Methods

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

const carrito = [
  { nombre: 'Monitor 20 Pulgadas', precio: 500 },
  { nombre: 'Televisión 50 Pulgadas', precio: 700 },
  { nombre: 'Tablet', precio: 300 },
  { nombre: 'Audifonos', precio: 200 },
];

// forEach
meses.forEach(function (mes) {
  if (mes == 'Marzo') {
    console.log('Marzo si existe');
  }
});

// Includes
let resultado = meses.includes('Diciembre');
console.log(resultado);

// Some ideal para arreglo de objetos
resultado = carrito.some(function (producto) {
  return producto.nombre === 'Celular PRO';
});
console.log(resultado);

// Reduce
resultado = carrito.reduce(function (total, producto) {
  return total + producto.precio;
}, 0);
console.log(resultado);

// Filter
resultado = carrito.filter(function (producto) {
  return producto.precio > 400;
});
console.log(resultado);

resultado = carrito.filter(function (producto) {
  return producto.nombre !== 'Audifonos';
});

console.log(resultado);