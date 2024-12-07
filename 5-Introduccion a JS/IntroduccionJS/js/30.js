function obtenerEmpleados() {
  const archivo = 'empleados.json';
  fetch(archivo)
    .then((resultado) => {
      return resultado.json();
    })
    .then((value) => {
      const { empleados } = value;
      empleados.forEach((empleado) => {
        console.log(empleado.puesto);
        document.querySelector('.contenido').textContent+=empleado.nombre
      });
    });
}

obtenerEmpleados();
