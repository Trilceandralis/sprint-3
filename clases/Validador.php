<?php
class Validador{
// Esta es para la que teníamos con bandera registro.
    public function validarUsuario($usuario){
        $errores = [];

      $nombre = trim($usuario->getName());
        if (empty($nombre)){
        $errores["nombre"]="Complete su nombre";
        }
      $email = trim($usuario->getEmail());
        if(empty($email)){
        $errores["email"]="Complete su email";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email inválido";
        }
      $pass= trim($usuario->getPass());

      $repass= trim($usuario->getRepass());
        if(empty($pass)){
        $errores["pass"] = "Introduzca su contraseña";
          }
        elseif (strlen($pass)<8) {
        $errores["pass"] = "La contraseña debe tener como mínimo ocho caracteres";
            }elseif ($pass != $repass) {
        $errores["repass"]= "Las contraseñas no coinciden";
            }
        if($usuario->getAvatar()!=null){
          if($_FILES["avatar"]["error"]!=UPLOAD_ERR_OK){
              $errores["avatar"]="No olvides subir tu imagen";
          }else{
            $nombre = $_FILES["avatar"]["name"];
            $ext = pathinfo($nombre,PATHINFO_EXTENSION);
            if($ext != "png" && $ext != "jpg"){
                $errores["avatar"]="El archivo debe ser png ó jpg";
            }
          }
        }
      return $errores;
    }
// Esta es la validación de bandera login
    public function validarLogin($usuario){
      $errores = [];

        $email = trim($usuario->getEmail());
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
          }
        $pass= trim($usuario->getPass());

          if(empty($pass)){
            $errores["pass"]= "No puedes dejar el campo en blanco";
          }elseif (strlen($pass)<8) {
            $errores["pass"]="La contraseña debe tener como mínimo ocho caracteres";
        }

      return $errores;
    }





    public function validarOlvide($usuario){

        $errores = [];

        $email = trim($usuario->getEmail());
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email inválido";
          }
        $password= trim($usuario->getPass());

        $repassword = trim($usuario->getRepass());


        if(empty($pass)){
            $errores["pass"]= "debes ingresar una password";
        }elseif (strlen($password)<8) {
            $errores["password"]="La contraseña debe tener como mínimo 8 caracteres";
        }
        if(empty($repass)){
            $errores["repass"]= "debes confirmar la contraseña";
        }

        return $errores;
    }


}
