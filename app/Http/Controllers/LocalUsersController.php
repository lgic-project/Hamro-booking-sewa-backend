<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalUsers;

class LocalUsersController extends Controller
{

    public function index()
    {
        return view('admin.modules.localusers.add');
    }

    //for saving in database
    public function store(Request $request)
    {
        $localUsersData = new LocalUsers();
        $localUsersData->fill($request->all());
        $localUsersData->save();
        return redirect()->route('index.localusers')->with('success', 'New User Added Successfully');
    }

    //for listing
    public function list()
    {
        $localUsersData = LocalUsers::all();
        return view('admin.modules.localusers.list', compact('localUsersData'));
    }

    //for deleting
    public function delete($id)
    {
        $localUsersData = LocalUsers::find($id);
        $localUsersData->delete();
        return redirect()->route('list.localusers')->with('message', 'Data deleted successfully!!');
    }
}
