<?php

class User{

    private $firstname;
    private $lastname;
    private $login;
    private $password;
    private $accessLevel;
    private $deleted;

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

    public function setLogin($login){
        $this->login = $login;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setAccessLevel($accessLevel){
        $this->accessLevel = $accessLevel;
    }

    public function setDeleted($deleted){
        $this->deleted = $deleted;
    }
}
?>