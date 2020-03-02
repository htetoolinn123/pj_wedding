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
}

$packages = Package::all();