<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageAdminController;
use App\Http\Controllers\client\QuestionnaireController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\hometestController;
use App\Http\Controllers\detailprodukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\produkController;





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
Route::middleware('auth')->group(function () {
Route::get('/tes', [QuestionnaireController::class, 'show'])->name('questionnaire.show');
Route::post('/tes', [QuestionnaireController::class, 'store'])->name('questionnaire.store');
Route::get('/questionnaire/result', [QuestionnaireController::class, 'result'])->name('questionnaire.result');
});

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

Route::get('/client.dashboard.homepage', [DashboardController::class, 'index'])->name('homepage');


//route untuk cart
Route::get('/cart', function () {
    return view('client.dashboard.cart');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/produks', function () {
    return view('admin.dashboard.menu.tambahProduk'); 
});


Route::post('/produks', [ProdukController::class, 'store'])->name('produks.store');

Route::get('/admin/dashboard/menu/tambah-produk', [\App\Http\Controllers\Admin\ProdukController::class, 'create'])
    ->name('admin.dashboard.menu.tambahProduk');

