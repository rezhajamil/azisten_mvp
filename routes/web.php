<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AfiliatorController;
use App\Http\Controllers\AlatKosPurchaseController;
use App\Http\Controllers\CateringPurchaseController;
use App\Http\Controllers\GalonPurchaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KosSearchController;
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

Route::get('/', [HomeController::class,'index']);
Route::post('/contact', [HomeController::class,'sendMessage']);
Route::get('about', [AboutController::class, 'index']);
Route::resource('cari_kos', KosSearchController::class);
Route::resource('afiliasi', AfiliatorController::class);
Route::resource('pesan_galon', GalonPurchaseController::class);
Route::resource('pesan_catering', CateringPurchaseController::class);
Route::resource('pesan_alat_kos', AlatKosPurchaseController::class);