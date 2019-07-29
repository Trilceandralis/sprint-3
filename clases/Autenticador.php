<?php
class Autenticador{
    static public function iniciarSession(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
    static public function  verificarPass($pass,$passHash){
        return password_verify($pass,$passHash);
    }
    static public function seteoUsuario($user,$dato){
    $_SESSION["nombre"]=$user["nombre"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["perfil"]= $user["perfil"];
    $_SESSION["avatar"]= $user["avatar"];
    if(isset($dato["recordar"]) ){
        setcookie("email",$dato["email"],time()+3600);
        setcookie("pass",$dato["pass"],time()+3600);
    }
}


    static public function validarUsuario(){
        if(isset($_SESSION["email"])){
            return true;
        }elseif (isset($_COOKIE["email"])) {
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        }else{
            return false;
        }
    }
}
