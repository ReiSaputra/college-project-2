<?php

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

<<<<<<< Updated upstream
=======
Route::get("/role", function () {
    return view("role");
});

Route::get("/login", function () {
    return view("login");
})->name("login");

Route::get("/part", function () {
    return view("layouts.participant");
})->name("participant");

Route::get("/course", function () {
    return view("layouts.course");
})->name("course");

Route::get("/test-email", [testMailController::class, "sendEmail"]);

/**
 * 404
 */
>>>>>>> Stashed changes
Route::fallback(function () {
    return view("fallback");
})->name("fallback");

Route::get("/part", function () {
    return view("participant");
});

Route::get("/ment", function () {
    return view("mentor");
});

