<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageAdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\SocialiteController;

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

//Route LoginAdmin
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.loginform');
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
Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');
// Route untuk Quisioner


Route::middleware(['auth'])->group(function () {
    Route::resource('admin/produk', ProdukController::class)->names('produk');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/edukasi', function () {
    return view('edukasi');
});


Route::get('/store', [PageController::class, 'index'])->name('store');

Route::get('/hometest', function () {
    return view('client.dashboard.hometest');
});

Route::get('/detailproduk', function () {
    return view('client.dashboard.detailProduk');
});

Route::get('/', function () {
    return view('client.dashboard.homepage');
});

Route::get('/home', function () {
    return view('client.dashboard.homepage');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route::get('/client.dashboard.homepage', [DashboardController::class, 'index'])->name('homepage');


//route untuk cart
Route::get('/cart', function () {
    return view('client.dashboard.cart');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('redirect', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');

Route::get('callback', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');

Route::get('logout', [SocialiteController::class, 'logout'])->name('logout')->middleware('guest');