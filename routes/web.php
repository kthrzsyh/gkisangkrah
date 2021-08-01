<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendetaController;
use App\Http\Controllers\WartaController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\CekLogin;
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

Route::get('/pendeta', [PendetaController::class, 'index'])->name('landing.pendeta');
Route::get('/album', [GalleryController::class, 'index'])->name('landing.gallery');
Route::get('/post', [WartaController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

Route::prefix('/admin')->middleware([AuthAdmin::class])->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/user', [AdminController::class, 'user']);
    Route::get('/addUser', [AdminController::class, 'addUser']);
    Route::post('/addUser', [AdminController::class, 'add']);
    Route::get('/user/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/user/update', [AdminController::class, 'update']);
    Route::get('/user/reset/{id}', [AdminController::class, 'reset']);
    Route::post('/user/resetPassword', [AdminController::class, 'resetPassword']);
    Route::get('/pdt', [AdminController::class, 'pdt']);
    Route::get('/addPdt', [AdminController::class, 'addPdt']);
    Route::post('/addPdt', [AdminController::class, 'add_pdt']);
    Route::get('/pdt/edit/{id}', [AdminController::class, 'edit_pdt']);
    Route::post('/pdt/update', [AdminController::class, 'update_pdt']);
    Route::post('/pdt/delete/{id}', [AdminController::class, 'delete_pdt']);
    Route::get('/warta', [AdminController::class, 'warta']);
    Route::get('/addWarta', [AdminController::class, 'addWarta']);
    Route::post('/storeWarta', [AdminController::class, 'add_warta']);
    Route::get('/hapusWarta/{id}', [AdminController::class, 'hapus_warta']);
    Route::get('/warta/edit/{id}', [AdminController::class, 'edit_warta']);
    Route::post('/editWarta', [AdminController::class, 'update_warta']);
    Route::get('/gallery', [AdminController::class, 'gallery']);
    Route::get('/addGallery', [AdminController::class, 'addGallery']);
    Route::post('/storeGallery', [AdminController::class, 'add_gallery']);
});


Route::post('/login', [loginController::class, 'login'])->middleware([CekLogin::class]);
Route::get('/login', function () {
    return view('pages.landing-page.login');
})->middleware([CekLogin::class]);

Route::get('/logout', [loginController::class, 'logout']);

Route::get('/', [LandingController::class, 'index'])->name('index');
