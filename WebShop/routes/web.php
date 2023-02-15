<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;

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



Route::get('/', function () {
    return view('welcome');
});


//   ----------------- Diese Routen können nur von angemeldeten Usern betreten werden!!

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //----------------------hier sind unsere Default Ressource Controller Routen

    Route::resource('items', ItemController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('categories', CategoryController::class);

//   Hier definieren wir die Post Route mit der wir die Artikel ID übergeben

    Route::get('customCreate/{id}',[CustomerController::class, 'createC'])->name('customCreate');

    Route::get('/showOrder',[OrderController::class, 'showOrder'])->name('showOrder');

    Route::POST('customers/continue',[CustomerController::class,'continue'])->name('continue');

    Route::get('orders.index',[OrderController::class, 'index']);

    Route::get('/payment/{id}', [PaymentController::class, 'charge'])->name('goToPayment');

    Route::post('/payment/process-payment/{id}', [PaymentController::class, 'processPayment'])->name('processPayment');


});
