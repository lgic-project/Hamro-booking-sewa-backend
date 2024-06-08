<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRooms;
use Illuminate\Support\Str;
use File;


class RoomController extends Controller
{

    public function applistMobile()
    {
        $roomData = HotelRooms::all();
        return response()->json($roomData);
    }

    public function appindex()
    {
        return view('app.hotelrooms.index');
    }

    public function appdisplay()
    {
        return view('admin.modules.hotelrooms.add');
    }

    public function appcreate(Request $request)
    {
        $roomData = new HotelRooms();
        $roomData->fill($request->all());

        if($request->has('room_gallery'))
            {
                foreach($request->file('room_gallery') as $roomGallery)
                {
                    $name=$roomGallery->getClientOriginalName();
                    $roomGallery->move(public_path('images/hotel/room/'), $name);  
                    $roomGalleryData[] = $name;
                }
            } else{
                $roomGalleryData = [];
            }
        $roomData->room_gallery = json_encode( $roomGalleryData);

        // $newThumbnailImageName = $request->file('room_gallery')->getClientOriginalName();
        // // dd($newThumbnailImageName);
        // $request->room_gallery->move('images/hotel/room/', $newThumbnailImageName);

        // $roomData->room_gallery = $newThumbnailImageName;
        $newThumbnailImageName = $request->file('room_thumbnail')->getClientOriginalName();
        // dd($newThumbnailImageName);
        $request->room_thumbnail->move('images/hotel/room/', $newThumbnailImageName);

        $roomData->room_thumbnail = $newThumbnailImageName;

        
        $roomData->slug = Str::slug($request->title);
        $roomData->save();
        return redirect()->back()->with('success', 'New hotel room added successfully');
    }
    public function applist()
    {
        $roomData = HotelRooms::all();
        return view('app.hotelrooms.list', compact('roomData'));
    }
    public function appedit($id)
    {
        $roomData = HotelRooms::find($id);
        return view('admin.modules.hotelrooms.update', compact('roomData'));
    }
    public function appupdate(Request $request, $id)
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

            File::delete(public_path('images/hotel/$title' . $roomData->room_thumbnail));

            $newThumbnailImageName = $request->file('room_gallery')->getClientOriginalName();
            // dd($newThumbnailImageName);
            $request->room_thumbnail->move('images/hotel/$title', $newThumbnailImageName);

            $roomData->room_thumbnail = $newThumbnailImageName;
        }
        $roomData->save();
        return redirect()->route('listrooms')->with('success', 'Data updated successfully!!');
    }
    public function appdelete($id)
    {
        $roomData = HotelRooms::find($id);
        $roomData->delete();
        return redirect()->route('listrooms')->with('message', 'Data deleted successfully!!');
    }
       public function approomdetail($id)
    {
        $roomData = HotelRooms::findorFail($id);
        return view('app.hotelrooms.roomprofile', compact('roomData'));
}
}
