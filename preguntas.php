<?php
include_once("controladores/funcionesFUMI.php");
?>

<html dir="ltr" lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/lampone.css">
  <title> Los Simuladores </title>
</head>
<body class="container-body">
  <div>
    <header class="main-header">

        <img src="imgs/logo.png" alt="logo" class="logo">

      <?php
      if(isset($_SESSION["nombre"])){
  include_once("headers/loggeado.php");
  }else{
  include_once("headers/noLoggeado.php");}

  ?>

  </header>
  <main>

    <section class="body-section">

        <h2> REGLAS: </h2>

        <div class="reglas-juego">

          <ol>
            <li> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
            <li> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
            <li> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>

          </ol>
        <br>


      </div>
      </section>
    </main>
    </div>


</body>
</html>
