<?php

use App\Http\Controllers\AuthController;
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
    return view("layouts.landingPage");
})->name("landing");

Route::get("role", function () {
    return view("role");
});

Route::get("/login", function () {
    return view("login");
})->name("login");
// Route::post()

Route::get("/sign-up/student", function () {
    return view("auth.student");
})->name("student.register");

Route::get("/sign-up/mentor", function () {
    return view("auth.mentor");
})->name("mentor.register");

// Route untuk proses pendaftaran
Route::post('/sign-up/student', [AuthController::class, 'registerStudent'])->name('student.register.post');
Route::post('/sign-up/mentor', [AuthController::class, 'registerMentor'])->name('student.register.post');

Route::get("/school-code/help", function (){
    return view("getSchoolCode");
});

Route::get('/mentor', function() {
    return view("mentor");
})->middleware('role:1');

Route::get('/part', function() {
    return view("participant");
})->middleware('role:2');

/**
 * 404
 */
Route::fallback(function () {
    return view("fallback");
})->name("fallback");