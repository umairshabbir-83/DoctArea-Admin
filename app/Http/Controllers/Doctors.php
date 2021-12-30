<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class Doctors extends Controller
{
    public function index()
    {
        $doctor = doctors::all();
        return view('admin.doctors')->with('doctors', $doctor);
    }

    public function show($id)
    {
        $doctor = doctors::find($id);
        return view('admin.doctors')->with('doctors', $doctor);
    }

    public function destroy($id)
    {
        doctors::destroy($id);
        return redirect('doctor')->with('flash_message', 'Doctor Deleted!');
    }
}
