<?php

// File: routes/web.php

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

// The welcome page is still our homepage.
Route::get('/', function () {
    return view('welcome');
});

// This new route is for the user's dashboard.
// It is protected by the 'auth' middleware, meaning only logged-in users can access it.
// The 'verified' middleware could be used to ensure the user has verified their email.
// The name('dashboard') allows us to refer to this route easily in our code.
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// This line is a bit of magic. It includes a file that Breeze created
// which contains all the necessary routes for login, registration,
// password reset, and logout. Keeping it in a separate file keeps our
// main web.php file clean and organized.
require __DIR__.'/auth.php';

