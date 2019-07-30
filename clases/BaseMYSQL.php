<?php

class BaseMYSQL{
    static public function conexion($host,$db_nombre,$usuario,$pass,$puerto,$charset){
        try {

        $dsn = "mysql:dbname=fumigadores;host=127.0.0.1;port=8889";
        $usuario = "root";
        $pass="root";
        $pdo = new PDO ($dsn, $usuario, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $errores) {
            echo "No me pude conectar a la Base de Datos ". $errores->getmessage();
            exit;

        }
    }
    static public function buscarPorEmail($email,$pdo,$tabla){
        //Aquí hago la sentencia select, para buscar el email, estoy usando bindeo de parámetros por value
        $sql = "select * from $tabla where email = :email";
        // Aquí ejecuto el prepare de los datos
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    static public function guardarUsuario($pdo,$usuario,$tabla,$avatar){
        $sql = "insert into $tabla (nombre,email,pass,avatar) values (:nombre,:email,:pass,:avatar)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nombre',$usuario->getnombre());
        $query->bindValue(':email',$usuario->getEmail());
        $query->bindValue(':pass',Encriptar::hashpass($usuario->getpass()));
        $query->bindValue(':avatar',$avatar);
        // $query->bindValue('role',1); FALTARIA AGREGAR ROL EN LA FUNCION "GuardarUsuario" y en variable $sql.
        $query->execute();

    }

}
