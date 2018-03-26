<?php

class User{

    private $firstname = string;
    private $lastname = string;
    private $login = string;
    private $password = string;
    private $accessLevel = int;
    private $deleted = bool;

    public function __construct()
    {
        
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getAccessLevel(){
        return $this->accessLevel;
    }

    public function getDeleted(){
        return $this->deleted;
    }

    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }

    public function setLastname($lastname){
        $this->lastname = $lastname;
    }

    public function setLogin(){
        $this->login = $login;
    }
}
?>