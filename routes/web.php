<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'bookShow']);

Route::get('/login', function(){
    return view('login');
});
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/about-us', function(){
    return view('about');
});

Route::get('/all-books', [BookController::class, 'show']);
Route::get('/books/{id}', [BookController::class, 'detail']);

Route::get('/contact-us', function(){
    return view('conttact');
});


Route::group(['middleware'=>'auth'], function(){
    Route::resource('cart', CartController::class);
    Route::patch('/empty/{id}', [CartController::class, 'empty']);
    Route::resource('cartDetail', DetailController::class);
    Route::resource('shippingaddress', ShippingAddressController::class);
    Route::resource('shipping', ShippingController::class);
    Route::resource('payment', PaymentController::class);
    Route::post('/order/billing', [TransactionController::class, 'store']);
    Route::get('/checkout', [CartController::class, 'checkout']);
    Route::get('/payment-proof', [UploadController::class, 'upload']);
    Route::post('/upload/process', [UploadController::class. 'process']);
});
