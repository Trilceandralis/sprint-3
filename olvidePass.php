<?php
include_once("controladores/funcionesFUMI.php");
if ($_POST){
  $errores=validar($_POST,"olvidePass");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe en nuestra base de datos";
    }else{
        $registro = armarRegistroOlvide($_POST);
          header("location: passRecuperada.php");
          exit;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

          <h2>MODIFICAR CONTRASEÑA</h2>

          <form class="form-group" action="" method="POST" enctype= "multipart/form-data" >


            <div class="campos">

              <input id="email" class="fondo-campo" type="email" name="email" value="<?=(isset($errores["email"]))? "" : persistir("email");?>" placeholder="Email"/>


              <input id="pass" class="fondo-campo" type="password" name="pass" value="" placeholder="Password" required />


              <input id="repass" class="fondo-campo" type="password" name="repass" value="" placeholder="Reingrese Password" required>



          </div>
            <br>
            <div class="botones-login">

              <button id="button" type="submit"> Enviar </button>

              <button id="button" type="reset"> Cancelar </button>

            </div>
          </form>


        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </main>
    </div>
  </body>
</html>
