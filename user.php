<?php
class User {
    public $login, $password;
    public function setLogin($login){
        $this->login = $login;
    }
    public function setPassword($password){
        $this->password = $password;
        
    }
    public function getLogin(){
        return $this->login;
    }
    public function isValid($login = "Peter", $password = "abcde"){
        if ($this->login === $login && $this->password === $password){
            return true;
        } else {
            return false;
        }
    }
}