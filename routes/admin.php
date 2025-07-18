<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BloodController;
use App\Http\Controllers\Admin\CitySettingController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CountrySettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileSettingController;
use App\Http\Controllers\Admin\StateController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('login', [AuthController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index']);

    Route::get('contact-us', [ContactUsController::class, 'index']);

    Route::get('settings/profile-settings', [ProfileSettingController::class, 'index']);
    Route::get('settings/country-settings', [CountrySettingController::class, 'index']);
    Route::post('settings/country-settings', [CountrySettingController::class, 'store']);

    Route::get('settings/state-settings', [StateController::class, 'index']);
    Route::post('settings/state-settings', [StateController::class, 'store']);

    Route::get('settings/city-settings', [CitySettingController::class, 'index']);
    Route::post('settings/city-settings', [CitySettingController::class, 'store']);

    Route::get('blood-donors', [BloodController::class, 'bloodDonorIndex']);
    Route::get('request-blood', [BloodController::class, 'requestBloodIndex']);


    Route::get('/blood-status-toggle/{id}', [BloodController::class, 'toggleStatus'])->name('blood.status.toggle');

    Route::get('/request-blood-status-toggle/{id}', [BloodController::class, 'requestBloodToggleStatus'])->name('request.blood.status.toggle');












});