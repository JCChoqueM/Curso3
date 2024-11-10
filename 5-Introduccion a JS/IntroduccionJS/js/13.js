const productoObj = {
  producto: 'Monitor 20 pulgadas',
  precio: 300,
  disponible: true,
};
console.log(productoObj);

const medidaObj = {
    peso: '1 kg',
    medida: '2m',
};
console.log('medidaObj :', medidaObj);

const nuevoProducto = {
    ...productoObj,
    ...medidaObj,
};

console.log(nuevoProducto);
console.log("nuevoProducto");
