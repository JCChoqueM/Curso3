// Array Methods

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

const carrito = [
  { nombre: 'Monitor 20 Pulgadas', precio: 500 },
  { nombre: 'Televisión 50 Pulgadas', precio: 700 },
  { nombre: 'Tablet', precio: 300 },
  { nombre: 'Audifonos', precio: 200 },
];

// forEach
meses.forEach((mes) => {
  if (mes == 'Marzo') {
    console.log('Marzo si existe');
  }
});

// Includes
let resultado = meses.includes('Marzo');
console.log(resultado);

// Some ideal para arreglo de objetos
resultado = carrito.some((producto) => producto.nombre === 'Celular PRO');
console.log(resultado);

// Reduce
resultado = carrito.reduce((total, producto) => total + producto.precio, 0);
console.log(resultado);

// Filter .red
resultado = carrito.filter((producto) => producto.precio > 400);
console.log(resultado);

resultado = carrito.filter((producto) => producto.nombre !== 'Audifonos');
console.log(resultado);
