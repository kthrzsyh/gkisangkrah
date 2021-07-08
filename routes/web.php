<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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
Route::get('artikel', [LandingController::class, 'artikel'])->name('landing.artikel');
Route::get('pendeta', [LandingController::class, 'pendeta'])->name('landing.pendeta');
Route::get('login', [LandingController::class, 'login'])->name('landing.login');
Route::resource('/', LandingController::class);
