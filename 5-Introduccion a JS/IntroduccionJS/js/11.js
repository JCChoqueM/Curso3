/* Objetos */
const productoObjeto = {
  producto: 'Monitor 20 pulgadas',
  precio: 300,
  disponible: true,
};
console.log('productoObjeto :', productoObjeto);
  const precioProducto = productoObjeto.precio;
  const nombreProducto = productoObjeto.producto;
  
  console.log('precioProducto :', precioProducto);
  console.log('nombreProducto :', nombreProducto);
  
  const { producto, precio } = productoObjeto;
  console.log('precio :', precio);
  console.log('producto :', producto);
  