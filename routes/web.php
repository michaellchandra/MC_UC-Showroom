<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'] );

Route::get('/addorder',[OrderController::class,'index']);

Route::get('/addcustomer',[CustomerController::class,'create']);
Route::post('/customersubmit',[CustomerController::class,'store']);
Route::get('/customers',[CustomerController::class, 'index']);
Route::get('/customers/{id}/editcustomer',[CustomerController::class, 'edit']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::post('/updatecustomer',[CustomerController::class, 'update']);
Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

Route::get('/addvehicle',[VehicleController::class, 'create']);
Route::post('/vehiclesubmit',[VehicleController::class,'store']);
Route::get('/vehicles',[VehicleController::class, 'index']);
Route::delete('/vehicles/{id}',[VehicleController::class, 'destroy'])->name('vehicles.destroy');

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/addorder', [OrderController::class, 'create'])->name('order.create');
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::get('/orders/{id}/edit', [OrderController::class, 'edit']);
Route::put('/orders/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);


Route::post('/ordersubmit',[OrderController::class,'store']);




