<?php
require_once("autoload.php");
if($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"]);
  $errores= $validar->validarLogin($usuario);
      if(count($errores)==0){
  $usuarioEncontrado = BaseMYSQL::buscarPorEmail($usuario->getEmail(),$pdo,'users');
  if($usuarioEncontrado == false){
    $errores["email"]="Usuario no registrado";
  }else{
    if(Autenticador::verificarPass($usuario->getPass(),$usuarioEncontrado["pass"] )!=true){
      $errores["pass"]="Error en los datos verifique";
    }else{
      Autenticador::seteoSesion($usuarioEncontrado);
      if(isset($_POST["recordar"])){
        Autenticador::seteoCookie($usuarioEncontrado);
      }
      if(Autenticador::validarUsuario()){
        redirect("index.php");
      }else{
        redirect("register.php");
      }
    }
  }
}
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lampone.css">
    <title> Los Simuladores </title>
  </head>
  <body class="container-body">
    <div>
      <?php if(isset($errores)):
            echo "<ul class='alert alert-danger text-center'>";
            foreach ($errores as $key => $value) :?>
              <li><?=$value;?> </li>
            <?php endforeach;
            echo "</ul>";
            endif;?>



      <header class="main-header">

        <img src="imgs/logo.png" alt="logo" class="logo">
        <?php include_once("headers/noLoggeado.php");?>

    </header>

      <main>


        <section class="body-section">


          <h2>INICIAR SESIÓN</h2>

          <form class="formulario" action="" method="post">

            <div class="campos">


              <input id="email" class="fondo-campo" type="email" name="email" value="" placeholder="Email" required>

              <input id="pass" class="fondo-campo" type="password" name="pass" value="" placeholder="Password" required>

            </div>

            <label id="recordarme">
              <input type="checkbox" name="rem"  value="r"> Recordarme
            </label>


            <div class="botones-login">

              <button id="button" type="submit" name="button"> Ingresar </button>

              <a id="button-olvide" type="button" href="olvidePass.php" name="button"> Olvide mi contraseña </a>

            </div>
          </form>
        </section>
      </main>
    </div>
  </body>
</html>
