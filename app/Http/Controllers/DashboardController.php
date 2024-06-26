<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\HotelOwner;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->category == 'superadmin') {
            return view('admin.index');
        }
        if (Auth::user()->category == 'hotel') {
            $userId = Auth::user()->id;
            $hotel = HotelOwner::where('user_id', '=', $userId)->first();
            if ($hotel === null) {
                return redirect('/completeprofile');
            } else {
                if ($hotel->hotel_status == 'Pending') {
                    return redirect('/pending-page');
                } else {
                    return view('app.index');
                }
            }
        }
    }

    public function completeProfile()
    {
        return view('app.completeProfile');
    }

    public function createProfile(Request $request)
    {
        $hotelData = new HotelOwner();

        $hotelData->email = Auth::user()->email;
        $hotelData->phone_number = Auth::user()->phone_number;


        $hotelData->fill($request->all());
        $hotelData->user_id = Auth::user()->id;
        $hotelData->hotel_status = "Pending";
        $hotelData->rating = "5";
        $hotelData->slug = Str::slug($request->title);

        $newThumbnailImageName = $request->file('photos')->getClientOriginalName();
        // dd($newThumbnailImageName);
        $request->photos->move('images/hotel/', $newThumbnailImageName);

        $hotelData->photos = $newThumbnailImageName;
        // dd($hotelData);
        $hotelData->save();
        return redirect('/pending-page');
    }

    public function verifyPending()
    {
        $userId = Auth::user()->id;
        $hotel = HotelOwner::where('user_id', '=', $userId)->first();
        if ($hotel->hotel_status == 'Pending') {
            return view('app.pending');
        } else {
            return view('app.index');
        }
    }
}
