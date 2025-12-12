<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home'); // or whatever view you are trying to load
    }
    public function index()
    {
        return view('app');
    }
    public function products()
    {
        return view('app');
    }
    
    public function about()
    {
        return view('about');
    }
     public function menu()
    {
        return view('menu');
    }
    
    public function contactus()
    {
        return view('contactus');
    }
    
    public function fallback()
    {
        return view('app');
    }
}

