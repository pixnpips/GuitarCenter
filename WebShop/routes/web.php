<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;

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

//   Hier definieren wir doe Post Route mit der wir die Artikel ID übergeben
    Route::POST('customers/createC',[CustomerController::class, 'createC'])->name('customer.createC');

    //Das hier muss ich noch ändern
    Route::POST('customer/continue',[CustomerController::class,'continue'])->name('customer.continue');
    Route::get('orders/showOrder',[OrderController::class,'showOrder'])->name('order.showOrder');
});
