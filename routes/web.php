<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VehiclecategoryController;
use App\Http\Controllers\VehicletypeController;
use App\Http\Controllers\FinanceController;
use App\Models\vehiclecategory;
use Database\Factories\PlanFactory;
use Database\Factories\VehiclecategoryFactory;

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

Route::get('user/signup',[userController::class,'create'])->name('signup_page');
Route::post('user/signup',[userController::class,'store'])->name('user_store');
Route::get('user/index',[userController::class,'index'])->name('user_index');
Route::get('user/login',[userController::class,'login_page'])->name('login_page');
Route::post('user/login',[userController::class,'login'])->name('login');
Route::post('user/logout',[userController::class,'logout'])->name('logout');



//                      user routes

Route::group(['middleware' => 'auth'],function(){

    Route::get('user/edit/{id}',[userController::class,'edit'])->name('user_edit');
    Route::post('user/index',[userController::class,'update'])->name('user_update');
    Route::get('user/delete/{id}',[userController::class,'destroy'])->name('user_destroy');



});

//                   plans routes


Route::group(['middleware' => 'auth'],function(){

    Route::get('plans/index',[PlanController::class,'index'])->name('plans_index');
    Route::post('plans/store',[PlanController::class,'store'])->name('plans_store');
    Route::get('plan/delete/{id}',[PlanController::class,'destroy'])->name('plan_destroy');
    Route::get('plan/edit/{id}',[PlanController::class,'edit'])->name('plan_edit');
    Route::post('plan/update',[PlanController::class,'update'])->name('plan_update');

});



//           vehicle category routes


Route::group(['middleware' => 'auth'], function(){

    Route::get('vehiclecat/index',[VehiclecategoryController::class,'index'])->name('vehiclecategory_index');
    Route::post('vehiclecat/store',[VehiclecategoryController::class,'store'])->name('vehiclecategory_store');
    Route::get('vehiclecat/delete/{id}',[VehiclecategoryController::class,'destroy'])->name('vehiclecat_destroy');
    Route::get('vehiclecat/edit/{id}',[VehiclecategoryController::class,'edit'])->name('vehiclecat_edit');
    Route::post('vehiclecat/update',[VehiclecategoryController::class,'update'])->name('vehiclecat_update');

});



//                     vehicle routes




Route::group(['middleware' => 'auth'], function(){

    Route::get('vehicle/index',[VehicletypeController::class,'index'])->name('vehicle_index');
    Route::post('vehicle/store',[VehicletypeController::class,'store'])->name('product_store');
    Route::get('vehicle/delete/{id}',[VehicletypeController::class,'destroy'])->name('vehicle_destroy');
    Route::get('vehicle/edit/{id}',[VehicletypeController::class,'edit'])->name('vehicle_edit');
    Route::post('vehicle/update',[VehicletypeController::class,'update'])->name('vehicle_update');

});



//                   Finance Mode Routes


Route::group(['middleware' => 'auth'], function(){

    Route::get('finance/index',[FinanceController::class,'index'])->name('finance_index');
    Route::post('finance/store',[FinanceController::class,'store'])->name('finance_store');
    Route::get('finance/delete/{id}',[FinanceController::class,'destroy'])->name('finance_destroy');
    Route::get('finance/edit/{id}',[FinanceController::class,'edit'])->name('finance_edit');
    Route::post('finance/update',[FinanceController::class,'update'])->name('finance_update');
    Route::get('finance/description',[FinanceController::class,'description'])->name('finance_dscr');

});
