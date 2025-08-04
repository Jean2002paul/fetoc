<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
 route::get('/contact', function () {
    return view('contact');
 });
