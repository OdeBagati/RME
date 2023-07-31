<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pasiens', PasienController::class);


Route::name("auth.")->group(function () {
    Route::middleware("guest")->group(function () {
        Route::get('/register', [AuthController::class, "register"])->name("register.page");
        Route::post("/register", [AuthController::class, "registerSave"])->name("register.post");
        Route::get('/login', [AuthController::class, "login"])->name("login.page");
        Route::post("/login", [AuthController::class, "authenticate"])->name("login.post");
    });
});


Route::get('/forget', function () {
    return view('auth.forget');
});
