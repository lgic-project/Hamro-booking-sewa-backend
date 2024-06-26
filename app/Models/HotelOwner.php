<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelOwner extends Model
{
    use HasFactory;

    protected $table = 'hotel_details';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'phone_number',
        'email',
        'slug',
        'hotel_status',
        'photos',
        'location',
        'rating'
    ];

    public function rooms()
    {
        return $this->hasMany(HotelRooms::class, 'hotel_id');
    }
}
