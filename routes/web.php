<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PageAdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\SocialiteController;

// =====otak atik urip=====// 
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;

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

Route::get('/detailproduk/{id}', [ProdukController::class, 'show'])->name('produk.show');


Route::get('/', function () {
    return view('client.dashboard.homepage');
});

Route::get('/home', function () {
    return view('client.dashboard.homepage');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route::get('/client.dashboard.homepage', [DashboardController::class, 'index'])->name('homepage');



Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('redirect', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');

Route::get('callback', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');

Route::get('logout', [SocialiteController::class, 'logout'])->name('logout')->middleware('guest');

// =====otak atik urip=====// 
Route::middleware(['auth'])->group(function () {
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
});
// yang di atas ini belom kelar

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

use App\Http\Controllers\KeranjangProdukController;

Route::middleware('auth')->group(function () {
    Route::post('/keranjang/tambah/{produkId}', [KeranjangProdukController::class, 'tambahKeKeranjang'])->name('cart.add');
    Route::post('/keranjang/kurangi/{produkId}', [KeranjangProdukController::class, 'kurangiDariKeranjang'])->name('keranjang.kurangi');
    Route::post('/keranjang/update/{produkId}', [KeranjangProdukController::class, 'updateKeranjang'])->name('keranjang.update');
    Route::delete('/keranjang/hapus/{produkId}', [KeranjangProdukController::class, 'hapusKeranjang'])->name('keranjang.hapus');
    Route::get('/cart', [KeranjangProdukController::class, 'lihatKeranjang'])->name('keranjang.lihat');
    Route::post('/keranjang/checkout', [KeranjangProdukController::class, 'checkoutKeranjang'])->name('keranjang.checkout');
});

Route::post('/payment/snap-token', [PaymentController::class, 'createSnapToken']);

// =====otak atik Suweg=====// 

Route::post('/payment/create-order', [PaymentController::class, 'createOrder']);

Route::post('/payment/validate', [PaymentController::class, 'notificationHandler']);
