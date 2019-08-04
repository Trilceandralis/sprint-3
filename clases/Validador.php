<?php
class Validador{
// Esta es para la que teníamos con bandera registro.
    public function validarUsuario($usuario){
        $errores = [];

      $name = trim($usuario->getname());
        if (empty($name)){
        $errores["name"]="Complete su nombre";
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
        $errores["password"] = "Introduzca su contraseña";
          }
        elseif (strlen($pass)<8) {
        $errores["password"] = "La contraseña debe tener como mínimo ocho caracteres";
            }elseif ($pass != $repass) {
        $errores["repassword"]= "Las contraseñas no coinciden";
            }
        if($usuario->getAvatar()!=null){
          if($_FILES["avatar"]["error"]!=UPLOAD_ERR_OK){
              $errores["avatar"]="No olvides subir tu imagen";
          }else{
            $name = $_FILES["avatar"]["name"];
            $ext = pathinfo($name,PATHINFO_EXTENSION);
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
            $errores["password"]= "No puedes dejar el campo en blanco";
          }elseif (strlen($pass)<8) {
            $errores["password"]="La contraseña debe tener como mínimo ocho caracteres";
        }

      return $errores;
    }





    public function validarOlvide($usuario){

        $errores = [];

        $email = trim($usuario->getEmail());
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email inválido";
          }
        $pass= trim($usuario->getPass());

        $repass = trim($usuario->getRepass());


        if(empty($pass)){
            $errores["password"]= "debes ingresar una password";
        }elseif (strlen($pass)<8) {
            $errores["password"]="La contraseña debe tener como mínimo 8 caracteres";
        }
        if(empty($repass)){
            $errores["repassword"]= "debes confirmar la contraseña";
        }

        return $errores;
    }


}
