<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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





Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');


// LOGIN ROUTES
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']); // <<< THIS LINE enables POST method!
// REGISTER ROUTES
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);



Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/home', function() {
    return view('home'); // Blade home page
});
