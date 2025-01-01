<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\GrowthController;



Route::get('/', function () {
    return view('user/index');
})->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/index2', function () {
        return view('medic/index');
    });
    // Tambahkan route lain untuk TenagaMedis...
});

Route::middleware('auth')->group(function () {
    Route::get('/index1', function () {
        return view('admin/index');
    });
    // Tambahkan route lain untuk Admin...
});

Route::get('/healthhistory', [HealthController::class, 'index']);
Route::get('/healthhistory/create', [HealthController::class, 'create']);
Route::post('/healthh', [HealthController::class, 'store'])->name('healthhistory.store');

Route::get('/growthhistory', [GrowthController::class, 'index']);
Route::get('/growthhistory/create', [GrowthController::class, 'create']);
Route::post('/growthh', [GrowthController::class, 'store'])->name('growthhistory.store');




Route::get('/healthrecord', function () {
    return view('user/healthrecord');
});

Route::get('/growthrecord', function () {
    return view('user/growthrecord');
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
