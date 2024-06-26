<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'room' => 'required|string|max:255',
            'date' => 'required|date',
            'arrivalTime' => 'required|string|min:5', // Correct field name and time format
            'people' => 'required|integer|min:1', // Assuming number of people should be an integer
        ]);

        $bookingData = new BookingModel();
        $bookingData->room = $request->input('room');
        $bookingData->room_thumbnail = $request->input('room_thumbnail');
        $bookingData->date = $request->input('date');
        $bookingData->time = $request->input('arrivalTime'); // Correct field name
        $bookingData->people = $request->input('people');
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
