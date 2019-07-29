<?php
class Hashear{
    static public function hashPass($pass){
        return password_hash($pass,PASSWORD_DEFAULT);
    }
}
