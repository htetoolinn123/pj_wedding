<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable =['booking_id',
							'item_id',
							'qty'];

	public function item($value='')
   {
        return $this->belongsTo('App\Item');
   }
   public function Booking($value='')
   {
        return $this->belongsTo('App\Booking');
   }
   public function user($value='')
   {
        return $this->belongsTo('App\User');
   }
   public function services($value='')
   {
        return $this->belongsToMany('App\Service');
   }

}
