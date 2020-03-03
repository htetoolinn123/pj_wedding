<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Service;
class FrontendController extends Controller
{
     public function main()
    {
        return view('frontend.main');
    }
     

     public function blog()
    {
        return view('frontend.blog');

    }
    public function faq()
    {
        return view('frontend.faq');
    }

     public function package()
    {
    	$packages = Package::all();
    	return view('frontend.package',compact('packages'));
    }

    public function detailpackage(Request $request)
    {
        $id =request('id');
        $package = Package::find($id);
        $services = Service::all();
    	return view('frontend.detailpackage',compact('package','services'));
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
