<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    //
    function home(){
        return view('components/home');
    }
    function about(){
        return view('components\about');
    }
    function register(){
        return view('components\register');
    }

}
