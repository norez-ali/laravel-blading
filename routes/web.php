<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// This is for User
Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');
});

// This is for Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
});
