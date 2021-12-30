<?php

use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Doctors;
use App\Http\Controllers\Patients;
use App\Http\Controllers\UserController as ControllersUserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/doctors', function () {
    return view('admin.doctors');
});

Route::get('/patients', function () {
    return view('admin.patients');
});

Route::get('/edit', function () {
    return view('admin.UpdateUser');
});

Route::get('/patDetails', function () {
    return view('admin.patDetails');
});

Route::get('/docDetails', function () {
    return view('admin.docDetails');
});

Route::resource('user', UserController::class);
