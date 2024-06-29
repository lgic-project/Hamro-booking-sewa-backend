<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'hotel_user_id',
        'room_id',
        'end_user_id',
        'total_people',
        'booking_id',
        'arrival_date',
        'arrival_time',
    ];
}
