<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;


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
    return view('client.dashboard.homepage'); 
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); 

Route::get('/client.dashboard.homepage', [DashboardController::class, 'index'])->name('homepage');


Route::get('/register', [RegisterController::class, 'showRegisterForm']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');







Route::get('/about', function () {
    return view('about');
});

Route::get('/edukasi', function () {
    return view('edukasi');
});

Route::get('/admin-dashboard/menu', function () {
    return view('admin.dashboard.menu.tes');
});

Route::get('/store', [PageController::class, 'store']);

Route::get('/store', function () {
    return view('client.dashboard.store');
});