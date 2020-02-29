<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name',
    						'photo',
						    'price',
						    'photo',
						    'service_id'];

	public function service($value='')
   {
   		return $this->beLongsTo('App\Service');
   }
}
