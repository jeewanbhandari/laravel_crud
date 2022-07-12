<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function welcome()
    {
        return view('welcome');
    }
    function about()
    {
        return view('about');

    }
    function services()
    {
        return view('services');

    }
    function gallery()
    {
        return view('gallery');

    }
    function contact()
    {
        return view('contact');

    }

}
