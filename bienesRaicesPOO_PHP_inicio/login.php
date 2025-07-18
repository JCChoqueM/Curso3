<?php
//Incluye el Header
require 'includes/app.php';
$db = conectarDB();

$errores = [];

//Autenticar el usuario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  /*   echo '<pre>';
  var_dump($_POST);
  echo '</pre>'; */

  $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (!$email) {
    $errores[] = 'El email es obligatorio o no es valido';
  }
  if (!$password) {
    $errores[] = 'El password es obligatorio';
  }
  if (empty($errores)) {
    //Revisar su el usuario existe o no
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($db, $query);


    if ($resultado->num_rows) {
      //Revisar si el password es correcto o no
      $usuario = mysqli_fetch_assoc($resultado);
      //verificar si el password es correcto o no
      $auth = password_verify($password, $usuario['password']);
      if ($auth) {
        //El usuario esta autenticado 
        session_start();

        $_SESSION['usuario'] = $usuario['email'];
        $_SESSION['login'] = true;

        header('Location: /admin');
      } else {
        $errores[] = 'El password es incorrecto';
      }
    } else {
      $errores[] = 'El usuario no existe';
    }
  }
}

incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Iniciar Sesión</h1>
  <?php foreach ($errores as $error) :  ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach;  ?>
  <form method="POST" class="formulario contenido-centrado">
    <fieldset>
      <legend>Login y Password</legend>

      <label for="email">Email:</label>
      <input
        type="email"
        name="email"
        id="email"
        placeholder="Tu Email" />
      <label for="password">Password:</label>
      <input
        type="password"
        name="password"
        id="password"
        placeholder="Tu password" />
    </fieldset>
    <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
  </form>
</main>
<?php
incluirTemplate('footer');
?>