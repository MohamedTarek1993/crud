<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('customers.index');
})->name('home');


Route::resource('customers', CustomerController::class);