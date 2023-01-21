<?php
class User {
    public $login, $password;
    public function __construct($login, $password)
    {
        $this->password = $password;
        $this->login = $login;
    }
    public function getLogin(){
        return $this->login;
    }
    public function isValid($login, $password){
        if ($this->login === $login && $this->password === $password){
            return true;
        } else {
            return false;
        }
    }
}