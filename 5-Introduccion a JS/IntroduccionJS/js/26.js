const reservacion = {
  nombre: 'julio',
  total: 5000,
  informacion: () => {
    console.log(this)
    console.log(`El cliente ${this.nombre} reservo y su cantidad a pagar es de: ${this.total}`);
  },
};
reservacion.informacion();

const reservacion2 = {
  nombre: 'julio',
  total: 5000,
  informacion: function () {
    console.log(this)
    console.log(`El cliente ${this.nombre} reservo y su cantidad a pagar es de: ${this.total}`);
  },
};
reservacion2.informacion();
