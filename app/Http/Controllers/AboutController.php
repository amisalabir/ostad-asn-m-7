<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    function index($name= "About"){
        return "This is index for About.";
    }
}
