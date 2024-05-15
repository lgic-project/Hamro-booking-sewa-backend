<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalUsers;

class LocalUsersController extends Controller
{
    public function register(Request $request)
    {
        // Create new user
        $localUsersData = new LocalUsers();
        $localUsersData->first_name = $request->first_name;
        $localUsersData->last_name = $request->last_name;
        $localUsersData->email = $request->email;
        $localUsersData->password = $request->password;
        $localUsersData->phone_number = $request->phone_number;
        if ($localUsersData->save()) {
            return response()->json([
                "status" => 200,
                "message" => "Data saved"
            ]);
        } else {
            return response()->json([
                "error" => 400,
                'message' => 'Data not saved',
            ]);
        }
    }
}
