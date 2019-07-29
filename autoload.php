<?php
require_once("helpers.php");
require_once("clases/usuario.php");
require_once("clases/Validador.php");
require_once("clases/Registrador.php");
require_once("clases/BaseDatos.php");
require_once("clases/Hashator.php");
require_once("clases/Autenticador.php");
require_once("clases/BaseMYSQL.php");
require_once("clases/Query.php");



$host = "localhost";
//$bd = "simuladores";
$usuario = " ";
$password = " ";
$puerto = "8889";
$charset = "utf8mb4";
//apache 3306?

$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);
