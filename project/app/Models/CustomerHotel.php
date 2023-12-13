<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'checkin',
        'checkout',
        'room_qty'
    ];
}
