<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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



/**
 * Route::get('/', function () {
 * return view('welcome');
 * });
 */

// open login page
Route::get('/login', function () {
    return view('auth.LoginPage');
});


// open Register page
Route::get('/register', function () {
    return view('auth.RegisterPage');
});

// open dashboard
// Route::get('/', function () {
//     return view('test');
// });

// open profile
// Route::get('/', function () {
//     return view('profile');
// });

// open data alumni
Route::get('/', function () {
    return view('dataalumni');
});

// open bantuan
// Route::get('/', function () {
//     return view('bantuan');
// });