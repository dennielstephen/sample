<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() 
    {
       return view('front.home');
    }

    public function about_us() 
    {
       return view('front.about_us');
    }

     public function breast_exam() 
    {
       return view('front.breast_exam');
    } 

    public function programs() 
    {
       return view('front.programs');
    }
    public function donate() 
    {
       return view('front.donate');
    }

}
