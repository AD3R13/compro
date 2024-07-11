<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\DaducationController;
use App\Http\Controllers\DexperienceController;
use App\Http\Controllers\DaboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/education', [EducationController::class, 'index']);
Route::get('/dexperience', [DexperienceController::class, 'index']);


// Route::resource() : get, post,update,delete
Route::resource('latihan', \App\Http\Controllers\LatihanController::class);
Route::get('penjumlahan', [\App\Http\Controllers\LatihanController::class, 'penjumlahan'])->name('penjumlahan');
Route::get('pengurangan', [\App\Http\Controllers\LatihanController::class, 'pengurangan'])->name('pengurangan');
Route::get('pembagian', [\App\Http\Controllers\LatihanController::class, 'pembagian'])->name('pembagian');
Route::get('perkalian', [\App\Http\Controllers\LatihanController::class, 'perkalian'])->name('perkalian');
Route::post('store_perkalian', [\App\Http\Controllers\LatihanController::class, 'storePerkalian'])->name('store_perkalian');
Route::post('store_penjumlahan', [\App\Http\Controllers\LatihanController::class, 'storePenjumlahan'])->name('store_penjumlahan');
Route::post('store_pembagian', [\App\Http\Controllers\LatihanController::class, 'storePembagian'])->name('store_pembagian');
Route::post('store_pengurangan', [\App\Http\Controllers\LatihanController::class, 'storePengurangan'])->name('store_pengurangan');

Route::resource('home', HomeController::class);

// admin disini
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [LoginController::class, 'index'])->name("login");

    Route::post('/', [LoginController::class, "loginPost"])->name("login.post");

    Route::middleware('auth')->group(function () {
        Route::resource('dashboard', DashboardController::class)->names(["index" => "dashboard.index"]);;
        Route::resource('user', UserController::class);
        Route::resource('profile', ProfileController::class);
        Route::resource('experience', ExperienceController::class);
        Route::resource('setting', SettingController::class);
        Route::resource('dabout', DaboutController::class);
        Route::resource('daducation', DaducationController::class);
        Route::resource('skill', SkillController::class);

        Route::post('/logout', [LoginController::class, 'logout'])->name("logout");
    });
});
