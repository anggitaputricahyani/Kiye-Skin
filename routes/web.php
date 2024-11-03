<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PageController;

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

Route::get('/', [PageController::class, 'homepage']);

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
    return view('store');
});