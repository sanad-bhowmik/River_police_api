<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/works', function () {
    return view('gallery');
});
Route::get('/price', function () {
    return view('price');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/plumbing', function () {
    return view('plumbing');
});
Route::get('/electric', function () {
    return view('electric');
});







Route::get('/test', function () {
    return view('test');
});
