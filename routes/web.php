<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('User.index');
});


Route::get('/about', function () {
    return view('User.about');
});

Route::get('/contact', function () {
    return view('User.contact');
});


Route::post('/contactdata',[StudentController::class,('printrecord')]);
Route::get('/get',[StudentController::class,('fetchcontact')]);
Route::post('/delete/{userid}',[StudentController::class,('deleterecord')]);
Route::post('/edit/{userid}',[StudentController::class,('editrecord')]);