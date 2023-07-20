<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $pageTittle = 'home';

        return view('home', ['pageTittle' => $pageTittle] );
    }
}
