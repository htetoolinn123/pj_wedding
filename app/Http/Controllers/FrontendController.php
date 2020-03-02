<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function main()
    {
        return view('frontend.main');
    }
   
     public function partner()
    {
        return view('frontend.partner');
    }    

     public function blog()
    {
        return view('frontend.blog');

    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function photography()
    {
        return view('frontend.photography');
    }

     public function contact()
    {
        return view('frontend.contact');

    }

}
