<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\KosSearchController as AdminKosSearch;
use App\Http\Controllers\Admin\GalonPurchaseController as AdminGalon;
use App\Http\Controllers\Admin\CateringPurchaseController as AdminCatering;
use App\Http\Controllers\Admin\AlatKosPurchaseController as AdminAlatKos;
use App\Http\Controllers\Admin\CustomerController as AdminCustomer;
use App\Http\Controllers\Admin\AfiliatorController as AdminAfiliator;
use App\Http\Controllers\Admin\CouponController as AdminCoupon;
use App\Http\Controllers\Admin\CouponRedemptionController as AdminCouponRedemption;
use App\Http\Controllers\Admin\KosController as AdminKos;
use App\Http\Controllers\Admin\HostController as AdminHost;
use App\Http\Controllers\Admin\KosCategoryController as AdminKosCategory;
use App\Http\Controllers\Admin\KosAddressController as AdminKosAddress;
use App\Http\Controllers\Admin\KosYearlyRentController as AdminKosYearRent;
use App\Http\Controllers\Admin\KosMonthlyRentController as AdminKosMonthRent;
use App\Http\Controllers\Admin\KosFacilityController as AdminKosFacility;
use App\Http\Controllers\Admin\KosImageController as AdminKosImage;
use App\Http\Controllers\Admin\KosTypeController as AdminKosType;
use App\Http\Controllers\Admin\CollegeController as AdminCollege;
use App\Http\Controllers\Admin\CampusController as AdminCampus;
use App\Http\Controllers\User\AfiliatorController as UserAfiliator;
use App\Http\Controllers\User\KosSearchController as UserCariKos;
use App\Http\Controllers\User\AlatKosPurchaseController as UserAlatKos;
use App\Http\Controllers\User\CateringPurchaseController as UserCatering;
use App\Http\Controllers\User\GalonPurchaseController as UserGalon;
use App\Http\Controllers\User\ReviewController as UserReview;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GalonQueueController;
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
    Route::get('search/{slug}', [UserCariKos::class, 'search'])->name('cari_kos.search');
    Route::get('book/{id}', [UserCariKos::class, 'book'])->name('cari_kos.book');
    Route::get('ride_sharing/{id}', [UserCariKos::class, 'rideSharing'])->name('cari_kos.ride_sharing');
    Route::resource('afiliasi', UserAfiliator::class);
    Route::resource('pesan_galon', UserGalon::class);
    Route::resource('pesan_catering', UserCatering::class);
    Route::resource('pesan_alat_kos', UserAlatKos::class);
    Route::resource('review', UserReview::class);
    Route::post('pesan_galon/queue', [GalonQueueController::class, 'getQueue'])->name('pesan_galon.queue');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('dashboard',function(){
    //     Route::resource('dashboard',AdminDashboard::class);
    // });
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard.index');
        });
        Route::resource('dashboard', AdminDashboard::class);
        Route::resource('cari_kos', AdminKosSearch::class);
        Route::resource('pesan_galon', AdminGalon::class);
        Route::resource('pesan_catering', AdminCatering::class);
        Route::resource('pesan_alat_kos', AdminAlatKos::class);
        Route::resource('customer', AdminCustomer::class);
        Route::resource('afiliasi', AdminAfiliator::class);
        Route::resource('coupon', AdminCoupon::class);
        Route::resource('coupon_redeem', AdminCouponRedemption::class);
        Route::resource('antrian_galon', GalonQueueController::class);
        Route::resource('host', AdminHost::class);
        Route::resource('kos', AdminKos::class);
        Route::resource('kos_category', AdminKosCategory::class);
        Route::resource('kos_type', AdminKosType::class);
        Route::resource('kos_facility', AdminKosFacility::class);
        Route::resource('kos_address', AdminKosAddress::class);
        Route::resource('kos_image', AdminKosImage::class);
        Route::resource('kos_yearly', AdminKosYearRent::class);
        Route::resource('kos_monthly', AdminKosMonthRent::class);
        Route::resource('college', AdminCollege::class);
        Route::resource('campus', AdminCampus::class);
        Route::get('campus/checkSlug', [AdminCampus::class, 'checkSlug']);
        Route::post('kos_image/deleteImage', [AdminKosImage::class, 'deleteImage'])->name('kos_image.deleteImage');
        Route::put('kos_image/change_cover/{kos_id}', [AdminKosImage::class, 'changeCover'])->name('kos_image.change_cover');
        Route::put('cari_kos/changeStatus/{kosSearch}', [AdminKosSearch::class, 'changeStatus'])->name('cari_kos.changeStatus');
        Route::put('pesan_galon/changeStatus/{galonPurchase}', [AdminGalon::class, 'changeStatus'])->name('pesan_galon.changeStatus');
        Route::put('pesan_catering/changeStatus/{cateringPurchase}', [AdminCatering::class, 'changeStatus'])->name('pesan_catering.changeStatus');
        Route::put('pesan_alat_kos/changeStatus/{alatKosPurchase}', [AdminAlatKos::class, 'changeStatus'])->name('pesan_alat_kos.changeStatus');
        Route::get('customer/contact/{phone}', [CustomerController::class, 'contactCustomer'])->name('contact');
    });
});


// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
