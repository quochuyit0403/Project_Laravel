<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;

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

        // Menu
        Route::prefix('menus')->group(function() {
            Route::get('/add', [MenuController::class, 'create']);
        });
    });
});
