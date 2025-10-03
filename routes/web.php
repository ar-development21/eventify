<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// This route tells Laravel: when a user makes a GET request to the root URL ('/'),
// execute a function that returns the 'welcome' view.
// The view name 'welcome' corresponds to the file 'resources/views/welcome.blade.php'.
Route::get('/', function () {
    return view('welcome');
});
