<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descriptions',
        'phone',
        'price',
        'price_sale',
        'thumb',
        'active',
        'place_id'
    ];

    // Khóa ngoại trỏ đến bảng places, 1 khách sạn thì chỉ có thể ở 1 tour
    public function place() {
        return $this->hasOne(Place::class, 'id', 'place_id');
    }

    // Thiết lập mối quan hệ để hắn hiển thị lên cơ sở dữ liệu: 
    // public function place_db() {
    //     return $this->belongsTo(Place::class, 'place_id');
    // }
}
