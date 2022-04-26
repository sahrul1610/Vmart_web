<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ContactController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ProductCategoryController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [HomeController::class, 'index']);//->middleware('admin');

Route::get('/kontak', function () {
    return view('admin/kontak');
});
Route::get('/login', [LoginController::class, 'login']);
Route::post('/post_login', [LoginController::class, 'post_login']);
Route::get('/logout', [LoginController::class, 'logout']);//->middleware('admin');

Route::get('/kontak', [contactController::class, 'index'])->name('kontak');
Route::get('/pesanan', [orderController::class, 'index']);
Route::post('/pesanan/insert', [orderController::class, 'index']);
Route::put('/pesanan/{id}', [orderController::class, 'index']);
Route::delete('/pesanan/{id}', [orderController::class, 'index']);

Route::get('/pembayaran', [PaymentController::class, 'index']);//->middleware('admin');
Route::post('/pembayaran/insert', [PaymentController::class, 'insert']);//->middleware('admin');
Route::get('/pembayaran/edit/{id}', [PaymentController::class, 'edit']);//->middleware('admin');
Route::put('/pembayaran/{id}', [PaymentController::class, 'put']);//->middleware('admin');
Route::delete('/pembayaran/{id}', [PaymentController::class, 'destroy']);//->middleware('admin');

Route::get('/kategori', [ProductCategoryController::class, 'index'])->name('kategori');
Route::post('/kategori/insert', [ProductCategoryController::class, 'insert']);
Route::get('/kategori/edit/{id}', [ProductCategoryController::class, 'edit']);
Route::post('/kategori/hapus', [ProductCategoryController::class, 'hapus']);
Route::post('/kategori/update', [ProductCategoryController::class, 'update']);

Route::get('/pelanggan', [CustomerController::class, 'index']);
Route::get('/pelanggan/delete/{id}', [CustomerController::class, 'delete']);

Route::get('/setting/profile', function () {
    return view('/admin/setting/profile');
});


Route::get('/produk', [productController::class, 'index']);
Route::get('/produk/add', [productController::class, 'add']);
Route::post('/produk/insert', [productController::class, 'insert']);
Route::get('/produk/edit/{id}', [productController::class, 'edit']);
Route::put('/produk/{id}', [productController::class, 'update']);
Route::delete('/produk/{id}', [productController::class, 'destroy']);


Route::get('/setting/profile/', [UserController::class, 'detail']);
Route::post('/setting/profile/', [UserController::class, 'insert']);
Route::get('/setting/profile/{id}', [UserController::class, 'edit']);
Route::put('/profile/update', [UserController::class, 'update']);
Route::get('/profile/delete/{id}', [UserController::class, 'destroy']);
// Route::get('/produk', [UserController::class, 'index']);
// Route::delete('/produk/{id}', [UserController::class, 'destroy']);

// Route::get('/produk', [productController::class, 'index']);
// Route::get('/produk/add', [productController::class, 'add']);
// Route::post('/produk/insert', [productController::class, 'insert']);
// Route::get('/produk/edit/{id}', [productController::class, 'edit']);
// Route::put('/produk/{id}', [productController::class, 'update']);
// Route::delete('/produk/{id}', [productController::class, 'destroy']);


Route::get('/kategori', [ProductCategoryController::class, 'index'])->name('kategori');
Route::post('/kategori/insert', [ProductCategoryController::class, 'insert']);
Route::get('/kategori/edit/{id}', [ProductCategoryController::class, 'edit']);
Route::post('/kategori/delete/{id}', [ProductCategoryController::class, 'destroy']);
Route::post('/kategori/update/{id}', [ProductCategoryController::class, 'update']);


Route::get('/kupon', function () {
    return view('admin/kupon');
});
