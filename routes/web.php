<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentscontroller; // Import the controller

Route::get('/', function () {
    return view('studentform'); // Make sure 'studentform' view exists in resources/views
});

Route::post('/store', [Studentscontroller::class, 'store'])->name('store'); // Adding a name is optional but useful
