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
        return view('app');
    }
    
    public function contact()
    {
        return view('app');
    }
    
    public function fallback()
    {
        return view('app');
    }
}

