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
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/addUser', [AdminController::class, 'addUser']);
    Route::post('/addUser', [AdminController::class, 'add']);
    Route::get('/user/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/user/update', [AdminController::class, 'update']);
    Route::get('/user/reset/{id}', [AdminController::class, 'reset']);
    Route::post('/user/resetPassword', [AdminController::class, 'resetPassword']);
});
Route::get('/', [LandingController::class, 'index'])->name('index');
