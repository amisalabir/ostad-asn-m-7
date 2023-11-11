<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function greet($name= "Laravel" ){

        return "Hello, $name !";

    }
   function login($email="",$password="")
    {
        $userEmail = "username@domain.com";
        $userPassword = "UserPassword";
        if($email == $userEmail &&  $password == $userPassword)
        {
            return "Login successful !";
        }
        else
        {
            return "'Invalid credentials !";
        }
    }
}
