<?php

use App\Http\Controllers\Admin\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PlaceController;
use App\Models\Destination;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\HotelController;
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

        // Places
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
