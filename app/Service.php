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
}
