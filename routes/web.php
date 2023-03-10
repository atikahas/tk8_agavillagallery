<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

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
//     return view('gallery.index');
// });
Route::get('/', [GalleryController::class, 'index']);
Route::get('/gallery/interior-main', [GalleryController::class, 'interiormain']);
Route::get('/gallery/interior-guest', [GalleryController::class, 'interiorguest']);
Route::get('/gallery/exterior', [GalleryController::class, 'exterior']);
Route::get('/gallery/situation', [GalleryController::class, 'situation']);
Route::get('/gallery/retouched', [GalleryController::class, 'retouched']);