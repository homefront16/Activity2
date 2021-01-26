<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService
{
    public function login(UserModel $userModel){
        $mySecurityDAO = new SecurityDAO();
        return $mySecurityDAO->findByUser($userModel);
    }
}

