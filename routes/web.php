<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\KosSearchController as AdminKosSearch;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\User\AfiliatorController as UserAfiliator;
use App\Http\Controllers\User\KosSearchController as UserCariKos;
use App\Http\Controllers\User\AlatKosPurchaseController as UserAlatKos;
use App\Http\Controllers\User\CateringPurchaseController as UserCatering;
use App\Http\Controllers\User\GalonPurchaseController as UserGalon;
use App\Http\Controllers\User\ReviewController as UserReview;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [HomeController::class, 'sendMessage']);
Route::get('about', [AboutController::class, 'index']);

Route::prefix('/')->name('user.')->group(function () {
    Route::resource('cari_kos', UserCariKos::class);
    Route::resource('afiliasi', UserAfiliator::class);
    Route::resource('pesan_galon', UserGalon::class);
    Route::resource('pesan_catering', UserCatering::class);
    Route::resource('pesan_alat_kos', UserAlatKos::class);
    Route::resource('review', UserReview::class);
});

Route::middleware(['auth'])->group(function () {
    // Route::get('dashboard',function(){
    //     Route::resource('dashboard',AdminDashboard::class);
    // });
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('dashboard', AdminDashboard::class);
        Route::resource('cari_kos', AdminKosSearch::class);
        Route::put('cari_kos/changeStatus/{kosSearch}', [AdminKosSearch::class, 'changeStatus'])->name('cari_kos.changeStatus');
        Route::get('customer/contact/{phone}', [CustomerController::class, 'contactCustomer']);
    });

});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
