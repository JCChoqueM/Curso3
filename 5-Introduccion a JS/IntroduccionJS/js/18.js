function sumar(a=9,b=4) {
  console.log(a+b);
}
sumar(10,10);
sumar(10,22);
sumar(10);
sumar();

const sumar2 = function (a,b) {
  console.log(a+b);
};
sumar(10,10);
sumar(10,22);
sumar(10);
sumar();

(function(a,b=7,c){
console.log(a+b+c)
})(2);

(function sumar(a=3, b = 6, c=1) {
  console.log(a + b + c);
})(13,5,78);
