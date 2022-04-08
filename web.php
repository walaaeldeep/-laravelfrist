<?php

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


Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::get('/homee',[App\Http\Controllers\PagesController::class,'index'])->name('home');
///Route::get('/',[App\Http\Controllers\LoginController::class,'login']);
Route::get('/aboute',[App\Http\Controllers\AbouteController::class,'index'])->name('aboute');
Route::get('/budget',[App\Http\Controllers\BudgetController::class,'index'])->name('budget');
Route::get('/flight confirmation',[App\Http\Controllers\FlightController::class,'index'])->name('flight confirmation');
Route::get('/payment',[App\Http\Controllers\PaymentController::class,'index'])->name('payment');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
