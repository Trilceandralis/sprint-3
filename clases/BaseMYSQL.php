<?php

class BaseMYSQL{
    static public function conexion($host,$db_nombre,$usuario,$pass,$puerto,$charset){
        try {

        $dsn = "mysql:dbname=$db_nombre;host=$host;port=$puerto";
        $pdo = new PDO ($dsn, $usuario, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $errores) {
            echo "No me pude conectar a la Base de Datos ". $errores->getmessage();
            exit;

        }
    }
    static public function buscarPorEmail($email,$pdo,$tabla){

        $sql = "select * from $tabla where email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    static public function guardarUsuario($pdo,$usuario,$tabla,$avatar){
        $sql = "insert into $tabla (nombre,avatar,email,password) values (:nombre,:avatar,:email,:password)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nombre',$usuario->getnombre());
        $query->bindValue(':avatar',$avatar);
        $query->bindValue(':email',$usuario->getEmail());
        $query->bindValue(':password',Encriptar::hashpass($usuario->getpass()));
        // $query->bindValue('role',1); FALTARIA AGREGAR ROL EN LA FUNCION "GuardarUsuario" y en variable $sql.
        $query->execute();

    }

    static public function updatePassword ($nuevaPassword, $usuario){
      $hasheada = Ecriptar::hashpass($nuevaPassword);
      $sql = "UPDATE Usuarios SET password = '$hasheada' WHERE id = '$usuario[$id]'";
    }
}
