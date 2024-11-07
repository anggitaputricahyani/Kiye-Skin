<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageAdminController;




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

Route::get('/home', function () {
    return view('client.dashboard.homepage'); 
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); 

Route::get('/client.dashboard.homepage', [DashboardController::class, 'index'])->name('homepage');





Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');



// Route to display the admin page
Route::get('/admin/pageadmin', [PageAdminController::class, 'index'])->name('page.admin')->middleware('auth');

// Route to handle form submission
Route::post('/admin/pageadmin', [PageAdminController::class, 'handleForm'])->name('page.admin.submit')->middleware('guest'); // Use guest middleware for login

// Route untuk Login
Route::get('/login', [LoginUserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginUserController::class, 'login']);


// Route untuk Register
Route::get('/register', [LoginUserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginUserController::class, 'register'])->name('SubmitRegister');

// Route untuk Logout
// Route untuk Logout
Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');

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