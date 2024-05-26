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
})->name("landingpage");

Route::get("/role", function () {
    return view("role");
});

Route::get("/login", function () {
    return view("login");
})->name("login");

// Student
Route::get("/sign-up/student", function () {
    return view("auth.student");
})->name("sign.student");

// Dashboard
Route::get("/participant/{id}/class", function () {
    return view("dashboard.participantDashboard");
});

Route::get("/mentor/{id}/class", function () {
    return view("dashboard.mentorDashboard");
});

Route::get("/mentor/{id}/course/create", function () {
    return view("welcome");
});

// Mentor
Route::get("/sign-up/mentor", function () {
    return view("auth.mentor");
})->name("sign.mentor");

/**
 * 404
 */
Route::fallback(function () {
    return view("fallback");
})->name("fallback");