<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\HotelRooms;
use App\Models\HotelOwner;
use App\Models\User;
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

    public function bookingDetails($id)
    {
        $bookingData = BookingModel::find($id);
        $roomData = HotelRooms::find($bookingData->room_id);
        $endUserData = User::find($bookingData->end_user_id);
        return view('app.booking.booking-details', compact('bookingData','endUserData', 'roomData'));
    }

    public function bookingListingJson($id)
    {
        $bookingData = BookingModel::where('id', '=', $id)->get();
        return response()->json($bookingData);
    }

    public function bookingDetailsJson($id)
    {
        $bookingData = BookingModel::where('hotel_user_id', '=', $id)->get();
        return response()->json(array(
            'bookingData' => $bookingData,
            'endUserData' => $endUserData,
            'roomData' => $roomData,
        ));

    }

    public function bookingEndUserData($id)
    {
        $bookingData = BookingModel::where('end_user_id', '=', $id)->get();
        return response()->json($bookingData);
    }

    public function bookingEndUserDataDetail($id)
    {
        $bookingData = BookingModel::find($id);
        $roomData = HotelRooms::find($bookingData->room_id);
        $hotelOwnerData = HotelOwner::where('user_id', '=', $bookingData->hotel_user_id)->first();

        return response()->json(array(
            'bookingData' => $bookingData,
            'hotelOwnerData' => $hotelOwnerData,
            'roomData' => $roomData,
        ));
    }
}
