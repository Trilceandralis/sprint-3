<?php
class ArmarRegistro{
    public function armarAvatar($imagen){
        $name = $imagen["avatar"]["name"];
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        $archivoOrigen = $imagen["avatar"]["tmp_name"];
        $archivoDestino = dirname(__DIR__);
        $archivoDestino = $archivoDestino."/imagenes/";
        $avatar = uniqid();
        $archivoDestino = $archivoDestino.$avatar;
        $archivoDestino = $archivoDestino.".".$ext;
        move_uploaded_file($archivoOrigen,$archivoDestino);
        $avatar = $avatar.".".$ext;

        return $avatar;
    }

    public function armarUsuario($registro,$avatar){

        $usuario = [
            "name"=>$registro->getname(),
            "email"=>$registro->getEmail(),
            "avatar"=>$avatar,
            "password"=> Encriptar::hashPass($registro->getPass()),
        ];

        return $usuario;
    }
}
