<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'user_name', 'user_email', 'guests', 'guest_count', 'start_date', 'end_date'
    ];
}
