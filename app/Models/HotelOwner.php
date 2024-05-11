<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelOwner extends Model
{
    use HasFactory;

    protected $table = 'hotel_owner';

    protected $fillable = [
        'title',
        'description',
        'phone_number',
        'email',
        'slug',
        'owner_status',
        'photos',
        'location',
        'rating'
    ];

    public function rooms()
    {
        return $this->hasMany(HotelRooms::class, 'hotel_owner_id');
    }
}
