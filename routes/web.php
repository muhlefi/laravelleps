<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // Add the correct use statement
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index', [
        "title" => "Home",
        "navbar" => "active"
    ]);
});

Route::get('/project', function () {
    return view('project', [
        "title" => "Project",
        "navbar" => "active"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "navbar" => "active"
    ]);
});

Route::get('/metaverse', function () {
    return view('metaverse', [
        "title" => "Metaverse",
        "navbar" => "active"
    ]);
});

Route::get('/tugasakhir', function () {
    return view('tugasakhir', [
        "title" => "Tugas Akhir",
        "navbar" => "active"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
    ]);
});

Route::get('/login', function () {
    return view('login', [
    ]);
});

//Form Validation
// Route::post('/contact', [ContactController::class, 'formsubmit'])->name('submit');

// Dashboard routes
Route::get('/dashboard', [ContactController::class, 'showDashboard'])->name('dashboard');
Route::get('/edit/{id}', [ContactController::class, 'editOrder'])->name('edit');
Route::put('/update/{id}', [ContactController::class, 'updateOrder'])->name('update');

// Form Validation and CRUD
Route::post('/contact', [ContactController::class, 'store'])->name('submit');
Route::delete('/delete/{id}', [ContactController::class, 'deleteOrder'])->name('delete');

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth', 'auth.order'])->group(function () {
Route::post('/submit-order', [AuthController::class, 'submitOrder'])->name('submit.order');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ContactController::class, 'showDashboard'])->name('dashboard');});