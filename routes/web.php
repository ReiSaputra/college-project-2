<?php

use App\Http\Controllers\exampleMailController;
use Illuminate\Support\Facades\Auth;
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
    return view('layouts.landingPage');
})->name("landing");

Route::get('/about', function () {
    return view('layouts.landingPage');
})->name("landing");

Route::fallback(function () {
    return view("fallback");
})->name("fallback");

Route::get("/part", function () {
    return view("participant");
});

Route::get("/ment", function () {
    return view("mentor");
});

Route::get("/test", [exampleMailController::class, "sendEmail"]);
