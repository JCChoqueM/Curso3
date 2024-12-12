//NOTE - querySelectorAll
//section - seleccionando todos los elementos ".navegacion a" html
const enlaces = document.querySelectorAll('.navegacion a');
/*NodeList(6) [a.navegacion__enlace, a.navegacion__enlace, a.navegacion__enlace, a.navegacion__enlace, a.navegacion__enlace, a.navegacion__enlace]
0: a.navegacion__enlace //NOTE Nosotros header
1: a.navegacion__enlace //NOTE Cursos   header
2: a.navegacion__enlace //NOTE Contacto header

3: a.navegacion__enlace //NOTE Nosotros footer
4: a.navegacion__enlace //NOTE Cursos   footer
5: a.navegacion__enlace //NOTE Contacto footer
length: 6
[[Prototype]]: NodeList*/
//!section fin seleccionando todos los elementos ".navegacion a" html

//section - modificando texto de un elemento
enlaces[0].textContent = 'content';
// #region enlaces[0] //nosotros header
//NOTE enlaces[0] Nosotros(original)
/*<a 
href="nosotros.html"
  class="navegacion__enlace"
>
  Nosotros
</a>;*/

//NOTE enlaces[0] Nosotros(modificado)
/*<a 
  href="nosotros.html"
  class="navegacion__enlace"
>
  content
</a>;*/
// #endregion
//!section modificando texto de un elemento

//section - modificando class de un elemento
enlaces[0].classList.add('nueva-clasesita');
// #region a
//NOTE añadiendo  una clase a la clase
/*<a 
  href="nosotros.html"
  class="navegacion__enlace nueva-clasesita"
>
  content
</a>;*/
// #endregion

enlaces[0].classList.remove('navegacion__enlce');
// #region
//NOTE removiendo un class
/*<a 
  href="nosotros.html"
  class="nueva-clasesita"
>
  content
</a>;*/
// #endregion
//!section - modificando class de un elemento
