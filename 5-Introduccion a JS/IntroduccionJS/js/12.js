'use strict';
/* Objetos */
const productoObjeto = {
  producto: 'Monitor 20 pulgadas',
  precio: 300,
  disponible: true,
};
console.log('productoObjeto :', productoObjeto);
productoObjeto.boleano = 'algo';
let { boleano } = productoObjeto;
console.log('boleano :', boleano);
boleano = 'sinceramente no se';
console.log('boleano :', boleano);
productoObjeto.boleano = 'simple';
console.log('productoObjeto :', productoObjeto);
Object.seal(productoObjeto);
Object.freeze(productoObjeto);
