<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name'];

    public function items($value='')
   {
   		return $this->hasMany('App\Item');
   }

   public function packages($value='')
   {
   		return $this->belongsToMany('App\Package')
   					->withTimestamps();
   }
   public function bookingdetails($value='')
   {
        return $this->hasMany('App\Bookingdetail');
   }
      public function bookings($value='')
   {
        return $this->hasMany('App\Booking');
   }
}
