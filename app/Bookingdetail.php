<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable =['booking_id',
							'item_id',
							'qty'];

}
