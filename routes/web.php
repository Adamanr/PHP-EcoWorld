<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact',function (){
    return view('contact');
})->name('contact');

Route::get('/reviews',function (){
    return view('reviews');
})->name('reviews');

Route::get('/vacancy',function (){
    return view('vacancy');
})->name('vacancy');

Route::get('/examples',function (){
    return view('examples');
})->name('examples');

Route::get('/pollution',function (){
    return view('pollution');
})->name('pollution');

Route::get('/cutting_down',function (){
    return view('cutting_down');
})->name('cutting_down');

