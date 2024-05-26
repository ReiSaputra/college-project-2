<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\courseController;
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

// Student
Route::get("/sign-up/student", function () {
    return view("auth.student");
})->name("student.register");

// Route untuk menangani pendaftaran siswa (POST)
Route::post('/sign-up/student', [AuthController::class, 'registerStudent'])->name('student.register.post');

// Route untuk menangani pendaftaran mentor (POST)
Route::post('/sign-up/mentor', [AuthController::class, 'registerMentor'])->name('mentor.register.post');

// Route untuk menangani login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Mentor
Route::get("/sign-up/student", function () {
    return view("auth.mentor");
})->name("mentor.register");


/// Route untuk dashboard participant
Route::get('/participant/{id}/dashboard', function ($id) {
    return view('dashboard.participantDashboard', ['id' => $id]);
})->name('participant.dashboard')->middleware('auth');

Route::get("/mentor/{id}/course/dashboard", [courseController::class, "view"])->name("course.view");
Route::get('/mentor/{id}/course/create', [courseController::class, "formCourse"])->name("course.form");
Route::post('/mentor/{id}/course/create', [courseController::class, "createCourse"])->name("course.controller");

// Mentor
Route::get("/sign-up/mentor", function () {
    return view("auth.mentor");
})->name("sign-in.mentor");

/**
 * 404
 */
Route::fallback(function () {
    return view("fallback");
})->name("fallback");