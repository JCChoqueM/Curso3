const carrito = [
  { nombre: 'Monitor 20 Pulgadas', precio: 500 },
  { nombre: 'Televisión 50 Pulgadas', precio: 700 },
  { nombre: 'Tablet', precio: 300 },
  { nombre: 'Audifonos', precio: 200 },
];
for (const element of carrito) {
  if (element.precio <= 300) {
    console.log(element.nombre + ' tiene un valor de: ' + element.precio);
  }
}
