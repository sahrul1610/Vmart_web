<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CustomerController;
//use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout/template');
// });
Route::get('/', function () {
    return view('admin/dashboard');
});
Route::get('/kategori', function () {
    return view('admin/kategori');
});
Route::get('/kontak', function () {
    return view('admin/kontak');
});
Route::get('/kontak', [contactController::class, 'index'])->name('kontak');
Route::get('/pesanan', [orderController::class, 'index']);
// Route::get('/pesanan', function () {
//     return view('admin/pesanan');
// });
// Route::get('/pembayaran', function () {
//     return view('admin/pembayaran');
// });
Route::get('/pembayaran', [PaymentController::class, 'index']);
Route::get('/kategori', [ProductCategoryController::class, 'index']);
Route::get('/pelanggan', [CustomerController::class, 'index']);

Route::get('/produk', function () {
    return view('admin/produk');
});

Route::get('/kupon', function () {
    return view('admin/kupon');
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix("admin")->group(function() {
//     Route::get("/theme", function() {
//         return view("layout/template");
//     });
// });
