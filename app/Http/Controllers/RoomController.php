<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRooms;
use Illuminate\Support\Str;
use File;


class RoomController extends Controller
{

    public function listMobile()
    {
        $roomData = HotelRooms::all();
        return response()->json($roomData);
    }

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
        $request->room_gallery->move('images/hotel/room/', $newThumbnailImageName);

        $roomData->room_thumbnail = $newThumbnailImageName;
        $newThumbnailImageName = $request->file('room_thumbnail')->getClientOriginalName();
        // dd($newThumbnailImageName);
        $request->room_thumbnail->move('images/hotel/room/', $newThumbnailImageName);

        $roomData->room_thumbnail = $newThumbnailImageName;
        $roomData->slug = Str::slug($request->title);
        $roomData->save();
        
    }
    public function list()
    {
        $roomData = HotelRooms::all();
        return view('admin.modules.hotelrooms.list', compact('roomData'));
    }
    public function edit($id)
    {
        $roomData = HotelRooms::find($id);
        return view('admin.modules.hotelrooms.update', compact('roomData'));
    }
    public function update(Request $request, $id)
    {
        $roomData = HotelRooms::find($id);
        $roomData->title = $request->title;
        $roomData->room_gallery = $request->room_gallery;
        $roomData->price = $request->price;
        $roomData->description = $request->description;
        $roomData->total_rooms = $request->total_rooms;
        $roomData->is_available = $request->is_available;
        $roomData->room_thumbnail = $request->room_thumbnail;
        $roomData->rating = $request->rating;



        if ($request->has('room_thumbnail')) {

            File::delete(public_path('images/hotel/room/$title' . $roomData->room_thumbnail));
        
            $newThumbnailImageName = $request->file('room_thumbnail')->getClientOriginalName();
            // dd($newThumbnailImageName);
            $request->room_thumbnail->move('images/hotel/rooms/$title', $newThumbnailImageName);

            $roomData->room_thumbnail = $newThumbnailImageName;
        }
       
       if ($request->has('room_gallery')) {

            File::delete(public_path('images/hotel/$title' . $roomData->room_gallery));

            $newThumbnailImageName = $request->file('room_gallery')->getClientOriginalName();
            // dd($newThumbnailImageName);
            $request->room_gallery->move('images/hotel/$title', $newThumbnailImageName);

            $roomData->room_gallery = $newThumbnailImageName;
        }
       
        $roomData->save();
        return redirect()->route('listrooms')->with('success', 'Data updated successfully!!');
    }
    public function delete($id)
    {
        $roomData = HotelRooms::find($id);
        $roomData->delete();
        return redirect()->route('listrooms')->with('message', 'Data deleted successfully!!');
    }
    public function roomdetail($id)
    {
        $roomData = HotelRooms::findorFail($id);
        return view('admin.modules.hotelrooms.roomprofile', compact('roomData'));
    }
}
