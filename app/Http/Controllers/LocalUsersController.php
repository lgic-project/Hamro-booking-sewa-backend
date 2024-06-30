<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LocalUsersController extends Controller
{

    //for users information in mobile
    public function userinfo()
    {
        $usersData = User::all();
        return response()->json($usersData);
    }

    public function index()
    {
        return view('admin.modules.localusers.add');
    }

    //for saving in database
    public function store(Request $request)
    {
         // dd($data);
        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'category' => $data['category'],
            'phone_number' => $data['phone_number']
        ];

        $userRegistration = User::create($userData);

        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'category' => $data['category'],
        //     'phone_number' => $data['phone_number']
        // ]);

        Mail::send('mail/registration',$userRegistration, function($message) use ($request)
            {
                $message->from('hamrobookingsewa@gmail.com');
                $message->to($data['email'])
                ->subject('Thank you for registration'. $data['name']);
            }
        );

        return response()->json(['message' => 'User registered successfully', 'localUsersData' => $localUsersData]);
    }

    //for listing
    public function list()
    {
        $localUsersData = User::all();
        return view('admin.modules.localusers.list', compact('localUsersData'));
    }

    //for deleting
    public function delete($id)
    {
        $localUsersData = User::find($id);
        $localUsersData->delete();
        return redirect()->route('list.localusers')->with('message', 'Data deleted successfully!!');
    }

    //for editing
    public function edit($id)
    {
        $localUsersData = User::find($id);
        return view('admin.modules.localusers.update', compact('localUsersData'));
    }

    //for updating
    public function update(Request $request, $id)
    {
        $localUsersData = User::find($id);
        $localUsersData->name = request('name');
        $localUsersData->email = request('email');
        $localUsersData->category = request('category');
        // $localUsersData->last_name = request('last_name');
        $localUsersData->password = request('password');
        $localUsersData->phone_number = request('phone_number');
        $localUsersData->save();
        return redirect()->route('list.localusers')->with('success', 'Data updated successfully!!');
    }

    //for csrf tokens:
    public function getToken(Request $request)
    {
        return response()->json(['csrfToken' => csrf_token()]);
    }
}
