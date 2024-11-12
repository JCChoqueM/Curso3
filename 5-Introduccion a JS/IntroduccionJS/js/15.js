const meses = ['enero', 'febrero', 'marzo', 'abril'];


console.log("🚀 ----------------------------------🚀");
console.log("🚀 ~ file: 15.js:3 ~ meses:", meses);
console.log("🚀 ----------------------------------🚀");




console.log(meses);
console.table(meses);

const carrito = [
  { nombre: 'Monitor 20 pulgadas', precio: 500 },
  { nombre: 'Television 50 pulgadas', precio: 700 },
  { nombre: 'Tablet', precio: 300 },
  { nombre: 'Audifonos', precio: 200 },
];
console.log("________________")
console.dir(carrito)
meses.forEach(function (mes) {
  if (mes == 'marzo') {
    console.log('marzo si existe');
  }
});
meses.forEach((meses) => {
  if (meses == 'marzo') {
    console.log('marzo si existe');
  }
});

let resultado = carrito.reduce((total, producto) => total + producto.precio, 0);

resultado = carrito.filter(function (producto) {
  return producto.nombre == 'Monitor 20 pulgadas';
});
console.log(resultado);

resultado = carrito.filter((producto) => producto.nombre != 'Monitor 20 pulgadas');
console.table(resultado);

resultado = carrito.filter((producto) => producto.precio > 100);
console.log(resultado);

resultado = carrito.filter((producto) => producto.precio <= 500);
console.table(resultado);
