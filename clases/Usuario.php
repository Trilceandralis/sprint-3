<?php
class User{
    protected $name;
    protected $email;
    protected $pass;
    protected $repass;
    protected $avatar;
    protected $puntaje;



    public function __construct($email,$password,$repass=null, $name=null,$avatar=null, $puntaje=null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $pass;
        $this->repass= $repass;
        $this->avatar = $avatar;
        $this->puntaje;= $puntaje;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function getRepass(){
        return $this->repass;
    }
    public function setRepassword($pass){
        $this->repass = $repass;
    }

    public function getAvatar(){
       return $this->avatar;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    public function getPuntaje(){
        return $this->pumtaje;
    }
    public function setPuntaje($puntaje){
        $this->puntaje = $puntaje;
    }
    }