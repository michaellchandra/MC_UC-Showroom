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
Route::get('/editcustomer',[CustomerController::class, 'edit']);
Route::post('/updatecustomer',[CustomerController::class, 'update']);

Route::get('/addvehicle',[VehicleController::class, 'create']);
Route::post('/vehiclesubmit',[VehicleController::class,'store']);
Route::get('/vehicles',[VehicleController::class, 'index']);

Route::post('/ordersubmit',[OrderController::class,'store']);




