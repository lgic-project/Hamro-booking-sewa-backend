<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRooms extends Model
{
    use HasFactory;
    protected $table = 'hotel_rooms';
    protected $fillable = [
        'title',
        'description',
        'slug',
        'price',
        'is_available',
        'total_rooms',
        'room_gallery',
        'room_thumbnail',
        'rating',
        'user_id',
        'hotel_id'
    ];

    public function howner()
    {
        return $this->belongsTo(HotelOwner::class, 'user_id');
    }
}
