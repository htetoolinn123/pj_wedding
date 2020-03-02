<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function main()
    {
        return view('frontend.main');
    }


     public function about()
    {
        return view('frontend.about');
    }

     public function partner()
    {
        return view('frontend.partner');
    }
}
