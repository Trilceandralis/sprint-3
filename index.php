<?php
require_once("autoload.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/lampone.css">
    <title> Los Simuladores </title>
  </head>
  <body>
    <div class="container">
      <header class="main-header">
        <div class="encabezado-home">

          <img src="imgs/logo.png" alt="logo" class="logo">

              </div>

              <?php
              if(isset($_SESSION["nombre"])){
        include_once("headers/loggeado.php");
      }else{
        include_once("headers/noLoggeado.php");}

      ?>
    </header>

      <section class="section-home">
        <button id="button-play"type="button" name="button"> PLAY</button>


      </section>
    </div>
  </body>
</html>
