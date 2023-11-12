<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active'
    ];

    // Dinh nghia moi quan he 1 - nhieu
    // public function places() {
    //     return $this->hasMany(Place::class, 'destination_id');
    // }
}
