<?php
class Usuario{
    protected $name;
    protected $email;
    protected $pass;
    protected $repass;
    protected $avatar;
    protected $puntaje;

    public function __construct($email,$pass, $repass=null, $name=null,$avatar=null, $puntaje=null){
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->repass= $repass;
        $this->avatar = $avatar;
        //$this->puntaje;= $puntaje;
    }
    public function getname(){
        return $this->name;
    }
    public function setname($name){
        $this->name = $name;
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
    public function setRepass($repass){
        $this->repass = $repass;
    }

    public function getAvatar(){
       return $this->avatar;
    }
    public function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    /*public function getPuntaje(){
        return $this->puntaje;
    }
    public function setPuntaje($puntaje){
        $this->puntaje = $puntaje;
    }*/
    }
