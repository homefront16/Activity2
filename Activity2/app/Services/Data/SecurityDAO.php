<?php
namespace App\Services\Data;

use App\Models\UserModel;
use Illuminate\Queue\Connectors\DatabaseConnector;
use Illuminate\Support\Facades\DB;

class SecurityDAO
{
    public function  findByUser(UserModel $userModel){
        //$connection = new DatabaseConnector();
       // $results2 = DB::select('select * from users where id = ?', array(1));
        $results = DB::select('select * from users where username = :username AND password = :password', ['username' => $userModel->getUsername(), 'password' => $userModel->getPassword()]);
        //$result = sqlsrv_query($connection, "SELECT `ID`, `USERNAME`, `PASSWORD` FROM `users` WHERE 1");
        if($results){
            return true;
        }
        else{
            return false;
        }
      
    }
    
 
}

