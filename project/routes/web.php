<?php

use App\Http\Controllers\Admin\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\MainnController;
use App\Http\Controllers\Admin\PlaceController;
use App\Models\Destination;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Destination\DestinationPageController;

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartHotelController;
use App\Http\Controllers\Hotel\HotelPageController;
use App\Http\Controllers\Tour\TourPageController;

use App\Http\Controllers\Tour_detailController;
use App\Http\Controllers\DesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/travel', [LoginController::class, 'travel']);
// Kieu nhu xong buoc ni la minh phai lam sao de neu nguoi dung khong dang nhap duoc vao 
// trang thi se khong truy cap vao admin duoc
Route::middleware(['auth'])->group(function() {

    Route::prefix('admin')->group(function() {
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('/main', [MainController::class, 'index']);

        // Destinations
        Route::prefix('destinations')->group(function() {
            Route::get('add', [DestinationController::class, 'create']);
            Route::post('add', [DestinationController::class, 'travel']);
            Route::get('list', [DestinationController::class, 'index']);
            Route::delete('destroy', [DestinationController::class, 'destroy']);
            Route::get('edit/{destination}', [DestinationController::class, 'show']);
            Route::post('edit/{destination}', [DestinationController::class, 'update']);
        });

        // Places
        Route::prefix('places')->group(function() {
            Route::get('add', [PlaceController::class, 'create']);
            Route::post('add', [PlaceController::class, 'travel']);
            Route::get('list', [PlaceController::class, 'index']);
            Route::delete('destroy', [PlaceController::class, 'destroy']);
            Route::get('edit/{place}', [PlaceController::class, 'show']);
            Route::post('edit/{place}', [PlaceController::class, 'update']);
        });

        // Hotels
        Route::prefix('hotels')->group(function() {
            Route::get('add', [HotelController::class, 'create']);
            Route::post('add', [HotelController::class, 'travel']);
            Route::get('list', [HotelController::class, 'index']);
            Route::delete('destroy', [HotelController::class, 'destroy']);
            Route::get('edit/{hotel}', [HotelController::class, 'show']);
            Route::post('edit/{hotel}', [HotelController::class, 'update']);
        });

        // Sliders
        Route::prefix('sliders')->group(function() {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'travel']);
            Route::get('list', [SliderController::class, 'index']);
            Route::delete('destroy', [SliderController::class, 'destroy']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
        });

        // Upload anh len server
        Route::post('upload/service', [UploadController::class, 'store']);
    });
});

Route::get('/', [MainnController::class, 'index'])->name('main_page');


Route::get('/destination', [DestinationPageController::class, 'index'])->name('destination_page');


Route::get('/tour', [TourPageController::class, 'index'])->name('tour_page');


Route::get('/hotel', [HotelPageController::class, 'index'])->name('hotel_page');


// Ấn vào link để load tới trang tour
Route::get('diem-den/{id}-{slug}.html', [DesController::class, 'index']);
Route::get('tour/{id}', [TourPageController::class, 'index_detail'])->name('detail_tour');
Route::get('hotel/{id}', [HotelPageController::class, 'index_detail'])->name('detail_hotel');

// Xu li gio hang
// Route::post('add-cart', [CartController::class, 'index']);
// Route::get('carts', [CartController::class, 'show']);

// Xu li dat tour/ dat khach san 
Route::post('carts', [CartController::class, 'addcart'])->name('booktour');
Route::post('carts-hotel', [CartHotelController::class, 'addcart'])->name('bookroom');