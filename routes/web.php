<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RoomController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'Home']);
Route::get('about', [AboutController::class, 'About']); 
Route::get('rooms', [RoomController::class, 'Rooms']); 




// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/profile', [HomeController::class, 'index2'])->name('profile');
// Route::get('/settings', [HomeController::class, 'index3'])->name('settings');