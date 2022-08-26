<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('frontend.index');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

});

Route::get('/class', [App\Http\Controllers\ClassController::class, 'index']);
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/fees-payment', [App\Http\Controllers\FeesPaymentController::class, 'index']);

Route::post('/class/add-class', [App\Http\Controllers\ClassController::class, 'store']);
Route::post('/class/{id}', [App\Http\Controllers\ClassController::class, 'destroy']);
Route::put('/class/{id}', [App\Http\Controllers\ClassController::class, 'update']);

Route::post('/student/add-student', [App\Http\Controllers\StudentController::class, 'store']);
Route::post('/student/{id}', [App\Http\Controllers\StudentController::class, 'destroy']);
Route::put('/student/{id}', [App\Http\Controllers\StudentController::class, 'update']);

Route::post('/fees-payment/add-payment', [App\Http\Controllers\FeesPaymentController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/my-profile', [App\Http\Controllers\Frontend\UserController::class, 'myProfile']);
Route::post('/my-profile-update', [App\Http\Controllers\Frontend\UserController::class, 'profileUpdate']);

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
