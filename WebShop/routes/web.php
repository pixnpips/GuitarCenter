<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Models\Customer;
use App\Models\Order;

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


//Ursprüngliche Welcome Ansicht Laravel
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [CategoryController::class,'WebShop'])->name('WebShop');
Route::get('/showItems/{id}', [CategoryController::class,'showItems'])->name('showItems');
Route::get('customCreate/{id}',[CustomerController::class, 'createC'])->name('customCreate');
Route::POST('customers/continue',[CustomerController::class,'continue'])->name('continue');
Route::get('/showOrder',[OrderController::class, 'showOrder'])->name('showOrder');
Route::get('/finishedOrder',[OrderController::class, 'finishedOrder'])->name('finishedOrder');
Route::get('/payment/{id}', [PaymentController::class, 'charge'])->name('goToPayment');
Route::post('/payment/process-payment/{id}', [PaymentController::class, 'processPayment'])->name('processPayment');

Route::get('/showItems/{id}', [CategoryController::class,'showItems'])->name('showItems');

Route::resource('orders', OrderController::class);

Route::get('/showC/{id}', [ItemController::class, 'showC'])->name('showC');


//   ----------------- Diese Routen können nur von angemeldeten Usern betreten werden!!

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        $orders=Order::getlatestOrders();
        $customers=Customer::getlatestCustomers();
        return view('dashboard',['customers'=>$customers, 'orders'=>$orders]);
    })->name('dashboard');


    //----------------------hier sind unsere Default Ressource Controller Routen


    Route::resource('customers', CustomerController::class);
    Route::resource('items', ItemController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('orders.index',[OrderController::class, 'index']);

});
