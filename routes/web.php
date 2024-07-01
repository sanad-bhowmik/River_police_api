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
Route::get('/handyman', function () {
    return view('handyman');
});
Route::get('/deepclean', function () {
    return view('deepclean');
});
Route::get('/floorpolish', function () {
    return view('floorpolish');
});
Route::get('/floorclean', function () {
    return view('floorclean');
});
Route::get('/wood', function () {
    return view('wood');
});
Route::get('/decking', function () {
    return view('decking');
});
Route::get('/searchPlumber', function () {
    return view('searchPlumber');
});
Route::get('/searchElectric', function () {
    return view('searchElectric');
});
Route::get('/searchHandyMan', function () {
    return view('searchHandyMan');
});
Route::get('/searchDeepclean', function () {
    return view('searchDeepclean');
});
Route::get('/searchFloorPolish', function () {
    return view('searchFloorPolish');
});
Route::get('/searchFloorClean', function () {
    return view('searchFloorClean');
});
Route::get('/searchWood', function () {
    return view('searchWood');
});

Route::get('/searchDecking', function () {
    return view('searchDecking');
});
Route::get('/noSearch', function () {
    return view('noSearch');
});






Route::fallback(function () {
    return response()->view('404', [], 404);
});




Route::get('/test', function () {
    return view('test');
});
