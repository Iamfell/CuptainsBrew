<?php

use Illuminate\Support\Facades\Route;


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



