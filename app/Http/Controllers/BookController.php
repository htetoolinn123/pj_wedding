<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use App\Package;
use App\Bookingdetail;
use App\Item;
use App\Service;
use Illuminate\Support\Facades\DB;
use Auth;
class BookController extends Controller
{
     public function __construct($value='')
    {
        $this->middleware('role:User')->except('index','bookingdetail');
    }
      
    public function store(Request $request)
    {
        $start_time =request('st');
        $end_time =request('et');
        $date =request('wd');
        $total =request('total');
        $note =request('note');
        $itemArray =request('itemArray');

        foreach ($itemArray as $key => $value) {
            $pid= $value['pid'];
            //dd($pid);
        }
        $book = new Booking;
        $book->total = $total;
        $book->start_time = $start_time;
        $book->end_time = $end_time;
        $book->date = $date;
        $book->notes =$note;
        $book->package_id =$pid;
        $book->user_id = Auth::user()->id;
        $book->save();

        foreach ($itemArray as $key => $value) {
            $bookingdetail=new Bookingdetail;
            $bookingdetail->booking_id=$book->id;
            $bookingdetail->item_id=$value['id'];
            $bookingdetail->save();
            //dd($pid);
        }


        return response()->json([
            'status' => "success",
        ]);
        
    }

  public function index()

    {
        $booking =Booking::all();
        $package =Package::all();
        $user =User::all();
        return view('backend.bookings.index',compact('booking','user','package'));
    }


   public function bookingdetail(Request $request)
    {
        $id =request('id');
        $book = Booking::find($id);
        $booking = Bookingdetail::where('booking_id',$id)->get();
        return view('backend.bookings.bookingdetail',compact('booking','book'));
    }


}
