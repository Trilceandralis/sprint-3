<?php

require_once("helpers.php");
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/Encriptar.php");
require_once("clases/Autenticador.php");
require_once("clases/BaseMYSQL.php");
require_once("clases/Query.php");

$host = "localhost";
$bd = "fumigadores";
$usuario = "root";
$pass = "root";
$puerto = "3306";
$charset = "utf8mb4";

$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$pass,$puerto,$charset);

$validar = new Validador();
$registro = new ArmarRegistro();
Autenticador::iniciarSession();


 ?>
