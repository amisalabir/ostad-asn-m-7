<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function greet($name= "Laravel" ){

        return "Hello, $name !";

    }
}
