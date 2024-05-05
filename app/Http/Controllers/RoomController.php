<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRooms;
use Illuminate\Support\Str;


class RoomController extends Controller
{
    public function index()
    {
        return view('admin.modules.hotelrooms.index');
    }

    public function display()
    {
        return view('admin.modules.hotelrooms.add');
    }

    public function create(Request $request)
    {
        $roomData = new HotelRooms();
        $roomData->fill($request->all());
         $newThumbnailImageName = $request->file('room_gallery')->getClientOriginalName();
        // dd($newThumbnailImageName);
        $request->room_gallery->move('images/hotel/$title', $newThumbnailImageName);

        $roomData->room_gallery = $newThumbnailImageName;

        $roomData->slug = Str::slug($request->title);
        $roomData->save();
         return redirect()->back()->with('success', 'New hotel room added successfully');
    }
}
