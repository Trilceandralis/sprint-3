<?php
class Autenticador{
    static public function iniciarSesion(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
    static public function  verificarPass($pass,$passHash){
        return password_verify($pass,$passHash);
    }
    static public function seteoUsuario($user){
    $_SESSION["name"]=$user["name"];
    $_SESSION["email"] = $user["email"];
    $_SESSION["perfil"]= $user["perfil"];
    $_SESSION["avatar"]= $user["avatar"];
    /*
    ACA DANI CIERRA seteoUsuario y hace lo sgte.:
    static public function seteoCookie($user){
            setcookie("email",$dato["email"],time()+3600);
            setcookie("password",$dato["password"],time()+3600);
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
*/
    if(isset($dato["recordar"]) ){
        setcookie("email",$dato["email"],time()+3600);
        setcookie("password",$dato["password"],time()+3600);
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
