<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\View;

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
Route::get('/home',[HomeController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});


Route::get('news', [ArtikelController::class,'news']);
Route::get('news/{String}', [ArtikelController::class,'newsString'] );

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganindustri']);
});

Route::get('/about-us', [AboutController::class, 'aboutus'] );

Route::get('/contact-us', [ContactController::class, 'contactus'] );