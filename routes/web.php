<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vine_mastercontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/Vine_master', [Vine_mastercontroller::class, 'index']);
 Route::resource("/Vine_master", Vine_masterController::class);

