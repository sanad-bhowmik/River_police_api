<?php

use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'getUsers']);
Route::post('/users', [UserController::class, 'createUser']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/otpVerification', [UserController::class, 'otpVerification']);

// Authentication
Route::middleware('auth-api')->group(function () {
    Route::post('/changePassword', [UserController::class, 'changePassword']);
    Route::post('/update-profile', [UserController::class, 'updateProfile']);
    Route::get('/profile', [UserController::class, 'getProfile']);

    // Securing complaints routes
    Route::post('/complaints', [ComplaintController::class, 'store']);
<<<<<<< HEAD
    Route::get('/complaints/{topic?}', [ComplaintController::class, 'getComplaints']);
=======
    Route::get('/complaints', [ComplaintController::class, 'getComplaints']);

>>>>>>> 098c7b5099fcd016642b2cc328a79a3fb15a7af0

});
//Division routes
Route::get('/divisions', [DivisionController::class, 'index']);
Route::get('/districts/{division_id?}', [DivisionController::class, 'getAllDivisionsAndDistricts']);
Route::get('/thanas/{district_id?}', [DivisionController::class, 'getAllThanas']);
Route::get('/services', [DivisionController::class, 'getAllServices']);
Route::get('/faqs', [DivisionController::class, 'getAllFaqs']);
