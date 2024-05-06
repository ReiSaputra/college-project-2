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
    return view('landingPage');
})->name("landing");

<<<<<<< Updated upstream
=======
Route::get("role", function () {
    return view("role");
});

Route::get("/login", function () {
    return view("login");
})->name("login");

Route::get("/mentor", function () {
    return view("layouts.mentor");
})->name("mentor");

Route::get("/kelas", function () {
    return view("layouts.kelasBaru");
})->name("kelas");

Route::get("/kelasSaya", function () {
    return view("layouts.kelasSaya");
})->name("kelasSaya");

Route::get("/kelasDemo", function () {
    return view("layouts.kelasDemo");
})->name("kelasDemo");

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

