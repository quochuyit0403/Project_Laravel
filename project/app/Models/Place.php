<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descriptions',
        'content',
        'destination_id',
        'price',
        'price_sale',
        'active',
        'thumb'
    ];


    // Thiet lap moi quan he 1 - nhieu
    // public function destination1() {
    //     return $this->belongsTo(Destination::class, 'destination_id');
    // }

    // Tạo mối quan hệ, 1 place chi co 1 Destination
    public function destination() {
        return $this->hasOne(Destination::class, 'id', 'destination_id');
    }

    // Tạo mối quan hệ để hiển thị lên cơ sở dữ liệu
    // public function hotels() {
    //     return $this->hasMany(Hotel::class, 'place_id');
    // }
}
