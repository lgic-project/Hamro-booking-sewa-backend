<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LocalUsersController extends Controller
{

    public function index()
    {
        return view('admin.modules.localusers.add');
    }

    //for saving in database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:local_users|max:255',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:15',
        ]);

        $localUsersData = new User();
        $localUsersData->name = $request->input('name');
        $localUsersData->category = $request->input('category');
        $localUsersData->email = $request->input('email');
        $localUsersData->password = $request->input('password');
        $localUsersData->phone_number = $request->input('phone_number');
        $localUsersData->save();

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
        // $localUsersData->last_name = request('last_name');
        $localUsersData->email = request('email');
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
