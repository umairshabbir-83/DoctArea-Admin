<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = users::all();
        return view('admin.profile', compact('user'));
    }

    public function show($id)
    {
        $user = users::find($id);
        return view('admin.profile')->with('users', $user);
    }


    public function edit($id)
    {
        $user = users::find($id);
        return view('admin.UpdateUser')->with('users', $user);
    }


    public function update(Request $request, $id)
    {
        $user = users::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');
    }
}
