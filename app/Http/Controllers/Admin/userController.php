<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function index()
    {
        $user = users::all();
        return view('admin.profile', compact('user'));
    }
}
