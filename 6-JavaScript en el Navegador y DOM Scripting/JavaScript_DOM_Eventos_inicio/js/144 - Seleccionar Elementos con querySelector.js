//NOTE - querySelector
//section - seleccionando un elemento del html
const heading = document.querySelector('.header__texto h2');
// #region Explicación
/*<h2
  id="heading"
  class="no-margin"
>
  Blog de café con consejos y cursos
  </h2>*/
// #endregion
//!section fin seleccionando un elemento del html
console.log(heading);

//section - modificando heading
heading.textContent = 'Nuevo heading';
// #region heading modificado
/*<h2
  id="heading"
  class="no-margin"
>
  Nuevo heading
</h2>*/
// #endregion
//!section fin modificando heading

//section - creando nueva clase
heading.classList.add('nueva-clase');
// #region creando nueva clase
/*<h2
  id="heading"
  class="no-margin nueva-clase"
>
  Nuevo heading
</h2>*/
// #endregion
//!section fin creando nueva clase
