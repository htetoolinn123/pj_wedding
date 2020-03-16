<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name'];

    public function services($value='')
   {
      return $this->belongsToMany('App\Service')
            ->withTimestamps();
   }

   public function bookings($value='')
   {
        return $this->hasMany('App\Booking');
   }
}
