<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class AjaxController extends Controller
{
    public function getitem(Request $Request)
    {
    	$id =request('id');
    	$item = Item::where('service_id',$id)->get();
    	//dd($item);

    	return $item;
    }
}
