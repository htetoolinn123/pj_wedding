<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Service;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items =Item::all();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('backend.items.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        "name"      => 'required|min:5|max:191',
        "photo"      => 'sometimes|mimes:jpeg,jpg,png',
        "price"      => 'required',
        "service"    => 'required'
        ]);

        if ($request->hasfile('photo')){
            $photo = $request->file('photo');
            $upload_dir = public_path().'/storage/item/';
            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move($upload_dir,$name);
            $path = '/storage/mentor/'.$name;
        }

        $item = new Item;
        $item->name = request('name');
        $item->photo = $path;
        $item->price = request('price');
        $item->service_id = request('service');

        // return redirected //5
        return redirect()->route('items.index');
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
