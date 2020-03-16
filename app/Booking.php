<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id',
							'total',
							'start_time',
							'end_time',
							'date',
							'notes',
							'package_id'];

public function user($value='')
   {
   		return $this->beLongsTo('App\User');
   }				

   public function package($value='')
   {
   		return $this->beLongsTo('App\Package');
   }	

   public function Bookingdetail($value='')
   {
        return $this->hasOne('App\Bookingdetail');
   }
   public function items($value='')
   {
        return $this->belongsToMany('App\Item');
   }			
}
