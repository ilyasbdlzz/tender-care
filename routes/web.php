<?php

use App\Http\Controllers\ConselingAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\GrowthController;
use App\Http\Controllers\GrowthAdminController;
use App\Http\Controllers\CounselingController;
use App\Http\Controllers\ArticleAdminConntroller;
use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\HealthAdminController;
use App\Http\Controllers\MedicController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('user/index');
})->name('user');

Route::get('/index1', function () {
    return view('admin/index');
})->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/index2', function () {
        return view('medic/index');
    });
    // Tambahkan route lain untuk TenagaMedis...
});

// Medic Routes with Prefix
Route::prefix('medic')->group(function () {
    Route::get('/', [MedicController::class, 'index'])->name('medic');
    Route::get('/create', [MedicController::class, 'create'])->name('medic.create');
    Route::post('/', [MedicController::class, 'store'])->name('medic.store');
    Route::get('/edit/{medic}', [MedicController::class, 'edit']);
    Route::put('/update/{medic}', [MedicController::class, 'update']);
    Route::get('/{idmedis}', [MedicController::class, 'show'])->name('medic.show');
    Route::delete('/destroy/{idmedis}', [MedicController::class, 'destroy']);
});

// Member Routes with Prefix
Route::prefix('member')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('member');
    Route::get('/create', [MemberController::class, 'create'])->name('member.create');
    Route::post('/', [MemberController::class, 'store'])->name('member.store');
    Route::get('/edit/{member}', [MemberController::class, 'edit']);
    Route::put('/update/{member}', [MemberController::class, 'update']);
    Route::get('/{id}', [MemberController::class, 'show'])->name('member.show');
    Route::delete('/destroy/{id}', [MemberController::class, 'destroy']);
});

// Conseling Routes with Prefix
Route::prefix('conseling')->group(function () {
    Route::get('/', [ConselingAdminController::class, 'index'])->name('conseling');
    Route::get('/create', [ConselingAdminController::class, 'create'])->name('conseling.create');
    Route::post('/', [ConselingAdminController::class, 'store'])->name('conseling.store');
    Route::get('/edit/{conseling}', [ConselingAdminController::class, 'edit']);
    Route::put('/update/{conseling}', [ConselingAdminController::class, 'update']);
    Route::get('/{id}', [ConselingAdminController::class, 'show'])->name('conseling.show');
    Route::delete('/destroy/{id}', [ConselingAdminController::class, 'destroy']);
});

// Growth Routes with Prefix
Route::prefix('growth')->group(function () {
    Route::get('/', [GrowthAdminController::class, 'index'])->name('growth');
    Route::get('/create', [GrowthAdminController::class, 'create'])->name('growth.create');
    Route::post('/', [GrowthAdminController::class, 'store'])->name('growth.store');
    Route::get('/edit/{growth}', [GrowthAdminController::class, 'edit']);
    Route::put('/update/{growth}', [GrowthAdminController::class, 'update']);
    Route::get('/{id}', [GrowthAdminController::class, 'show'])->name('growth.show');
    Route::delete('/destroy/{id}', [GrowthAdminController::class, 'destroy']);
});

// Health Routes with Prefix
Route::prefix('health')->group(function () {
    Route::get('/', [HealthAdminController::class, 'index'])->name('health');
    Route::get('/create', [HealthAdminController::class, 'create'])->name('health.create');
    Route::post('/', [HealthAdminController::class, 'store'])->name('health.store');
    Route::get('/edit/{health}', [HealthAdminController::class, 'edit']);
    Route::put('/update/{health}', [HealthAdminController::class, 'update']);
    Route::get('/{id}', [HealthAdminController::class, 'show'])->name('health.show');
    Route::delete('/destroy/{id}', [HealthAdminController::class, 'destroy']);
});

// Artikel Routes with Prefix
Route::prefix('articleadmin')->group(function () {
    Route::get('/', [ArticleAdminController::class, 'index'])->name('articleadmin');
    Route::get('/create', [ArticleAdminController::class, 'create'])->name('articleadmin.create');
    Route::post('/', [ArticleAdminController::class, 'store'])->name('articleadmin.store');
    Route::get('/edit/{article}', [ArticleAdminController::class, 'edit']);
    Route::put('/update/{article}', [ArticleAdminController::class, 'update']);
    Route::get('/{id}', [ArticleAdminController::class, 'show'])->name('articleadmin.show');
    Route::delete('/destroy/{id}', [ArticleAdminController::class, 'destroy']);
});


Route::get('/healthhistory', [HealthController::class, 'index']);
Route::get('/healthhistory/create', [HealthController::class, 'create']);
Route::post('/healthh', [HealthController::class, 'store'])->name('healthhistory.store');

Route::get('/growthhistory', [GrowthController::class, 'index']);
Route::get('/growthhistory/create', [GrowthController::class, 'create']);
Route::post('/growthh', [GrowthController::class, 'store'])->name('growthhistory.store');

Route::middleware('auth')->group(function () {
    Route::get('/appointmentstatus', [CounselingController::class, 'index'])->name('appointmentstatus');
    Route::get('appointment', [CounselingController::class, 'create'])->name('appointment.create');
    Route::post('appointment', [CounselingController::class, 'store'])->name('appointmentstatus.store');
});



Route::get('/healthrecord', function () {
    return view('user/healthrecord');
});

Route::get('/growthrecord', function () {
    return view('user/growthrecord');
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
