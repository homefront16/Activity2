<?php
namespace App\Models;

class UserModel
{
    private $username;
    private $password;
 
    function __construct(String $username, String $password){
        $this->username = $username;
        $this->password = $password;
    }
    
    
    
    
    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    
}

