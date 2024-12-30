<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login1', function () {
    return view('login');
});

Route::get('/register1', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('user/index');
});

Route::get('/healthrecord', function () {
    return view('user/healthrecord');
});

Route::get('/growthrecord', function () {
    return view('user/growthrecord');
});

Route::get('/growthhistory', function () {
    return view('user/growthh');
});

Route::get('/healthhistory', function () {
    return view('user/healthh');
});

Route::get('/appointment', function () {
    return view('user/appointment');
});

Route::get('/appointmentstatus', function () {
    return view('user/appointmentstatus');
});

Route::get('/detail', function () {
    return view('user/articledetail');
});

Route::get('/article', function () {
    return view('user/article');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
