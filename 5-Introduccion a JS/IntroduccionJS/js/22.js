let numeros = [1, 2, 3];
let numeros2 = [4, 5, 6];

let resultado = numeros2.map((value, index, array) => {
  console.log(`Arreglo original: ${array}`); // Muestra el arreglo original (`numeros`)
  console.log(index)
  console.log(value)
});

console.log(resultado);
// [5, 7, 9]

