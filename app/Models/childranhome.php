<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class childranhome extends Model
{
    //use HasFactory;

    public function bookings()
    {
        return $this->belongsTo(bookings::class);
    }



}
