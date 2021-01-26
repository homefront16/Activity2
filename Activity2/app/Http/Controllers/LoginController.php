<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // Usage of path method
        $path = $request->path();
        echo 'Path Method: '.$path;
        echo '<br>';
        
        // Usage of is method
        $method = $request->isMethod('get') ? "GET" : "POST";
        echo 'GET or POST Method: '.$method;
        echo '<br>';
        
        // Usage of url method
        $url = $request->url();
        echo 'URL method: '.$url;
        echo '<br>';
        
        $username = $request->input('username');
        $password = $request->input('password');
        echo "Your username is: " . $username . "  Your password is: " . $password;
        echo '<br>';
        
        $myUserModel = new UserModel($username, $password);
        $mySecurityService = new SecurityService();
        if($mySecurityService->login($myUserModel)){
            return view('loginpassed2', ['username' => $myUserModel->getUsername()]);
        }
        else{
            return view('loginfailed');
        }
    //    $data = ['firstName' => $firstName, 'lastName' => $lastName];
  //      return view('thatswhoami')->with($data);
        
        
    }
}
