<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GHLController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function services()
    {
        return view('services');
    }
    public function projects()
    {
        return view('projects');
    }
    public function aboutus()
    {
        return view('about-us');
    }
    public function contact()
    {
        return view('contact');
    }
}
