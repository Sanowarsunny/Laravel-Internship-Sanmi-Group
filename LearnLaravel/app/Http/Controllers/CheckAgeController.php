<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAgeController extends Controller
{
    //
    function index(){
        return view('home');
    }
    
    function contact(){
        return view('contact');
    }
}
