<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendetaController;
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
Route::get('/artikel', [ArtikelController::class, 'index'])->name('landing.artikel');
Route::get('/pendeta', [PendetaController::class, 'index'])->name('landing.pendeta');

Route::post('/login', [loginController::class, 'login']);
Route::get('/login', function () {
    return view('pages.landing-page.login');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});
Route::get('/', [LandingController::class, 'index'])->name('index');
