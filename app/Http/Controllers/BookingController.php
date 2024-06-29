<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function store(Request $request)
    {

        $bookingData = new BookingModel();
        $bookingData->hotel_user_id = $request->input('hotel_user_id');
        $bookingData->room_id = $request->input('room_id');
        $bookingData->end_user_id = $request->input('end_user_id');
        $bookingData->total_people = $request->input('total_people');
        $bookingData->booking_id = $request->input('booking_id');
        $bookingData->arrival_date = $request->input('arrival_date');
        $bookingData->arrival_time = $request->input('arrival_time'); // Correct field name
        $bookingData->save();

        return response()->json(['message' => 'Booked successfully', 'bookingData' => $bookingData]);
    }

    public function bookinginfo()
    {
        $bookingData = BookingModel::all();
        return response()->json($bookingData);
    }

    public function cancelbooking($id)
    {
        $bookingData = BookingModel::find($id);
        $bookingData->delete();
        return response()->json(['message' => 'Deleted Successfully', 'bookingData' => $bookingData]);
    }
}
