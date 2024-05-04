<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRooms;

class RoomController extends Controller
{
    public function index()
    {
        return view('admin.modules.hotelrooms.index');
    }

    public function add(Request $request)
    {
        $roomData = new HotelRooms();
        $roomData->fill($request->all());


        $roomData->save();

        return redirect()->route('admin.modules.add')->with('success', 'New hotel room added successfully');
    }
}
