/* function sumar(a, b) {
  return a + b;
}
const resultado = sumar(2, 3);

console.log(resultado);

const resultado2 = (function (a, b) {
  return a + b;
})(3, 5);
console.log(resultado2); // Imprime 8

const resultado3 = ((a, b) => a + b)(78, 78);
console.log(resultado3);

const resultado4 = (a, b) => a + b;
console.log(resultado4(16, 4));

const resultado5 = (a, b) => {
  a + b;
};
console.log(resultado5(22, 4));

const resultado6 = (a, b) => {
  return a + b;
};
console.log(resultado6(22, 4));

;

const resultado8 = () => console.log(8 + 5);
console.log(resultado8());
*/


let total = 0;
function agregarCarrito(precio) {
    return (total += precio);
}

function calcularImpuesto(total) {
    return 1.15 * total;
}

total = agregarCarrito(200);
total = agregarCarrito(400);
total = agregarCarrito(600);
console.log(total);

const totalAPagar = calcularImpuesto(total);
console.log(`El total a pagar con impuestos es de : Bs. ${totalAPagar}`);
