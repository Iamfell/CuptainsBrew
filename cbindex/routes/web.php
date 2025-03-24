<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
});

route::get('/menu', function(){
    return view('menu');
});

route::get('/career', function(){
    return view('career');
});


route::get('/about', function(){
    return view('about');
});




// LOGIN ROUTES
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']); // <<< THIS LINE enables POST method!
// REGISTER ROUTES
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');




Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/home', function() {
    return view('home');
})->name('home');
