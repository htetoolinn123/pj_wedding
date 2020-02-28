<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id',
							'total',
							'date',
							'time',
							'notes',
							'package_id'];
}
