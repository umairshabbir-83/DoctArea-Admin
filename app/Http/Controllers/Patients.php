<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class Patients extends Controller
{
    public function index()
    {
        $patient = patients::all();
        return view('admin.patients')->with('patients', $patient);
    }

    public function show($id)
    {
        $patient = patients::find($id);
        return view('admin.patients')->with('patients', $patient);
    }

    public function destroy($id)
    {
        patients::destroy($id);
        return redirect('patient')->with('flash_message', 'patient Deleted!');
    }
}
