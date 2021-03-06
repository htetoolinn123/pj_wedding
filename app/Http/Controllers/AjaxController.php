<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\DB;
class AjaxController extends Controller
{
    public function getitem(Request $request)
    {
    	 $name=request('pname');
    	$id =request('id');
    	$pid=request('pid');
    	//dd($pid);
    	if(request('pname')=="Wedding Halls"){
    		//var_dump($pid);
    		if(request('packagename')=="Diamond")
    		{
    			$item = Item::where('service_id',$id)
    						->where('price', '>=',25000000)->get();
    		}
    		if(request('packagename')=="Platinum")
    		{
    			$item = Item::where('service_id',$id)
    						->where('price', '<',25000000)
    						->where('price', '>=',20000000)->get();
    		}
    		if(request('packagename')=="Gold")
    		{
    			$item = Item::where('service_id',$id)
    						->where('price', '>=',15000000)
    						->where('price', '<',20000000)
    						->get();
    		}
    		if(request('packagename')=="Silver")
    		{
    			$item = Item::where('service_id',$id)
    						->where('price', '>=',10000000)
    						->where('price', '<',15000000)
    						->get();
    		}
    		//return $item;
    	}else{
    		$item = Item::where('service_id',$id)->get();
    	}
    	//dd($item);
    	
    	//return $item;

        return response()->json([
            'item' => $item,
            'pid' => $pid
        ]);


    }
}
