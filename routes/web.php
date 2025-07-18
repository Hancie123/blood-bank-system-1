<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Website\BloodDonorController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\RequestBloodController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('about-us',[AboutController::class,'index']);
Route::get('contact-us',[ContactUsController::class,'index']);
Route::post('contact-us',[ContactUsController::class,'store']);

Route::get('blood-donor',[BloodDonorController::class,'index']);
Route::post('blood-donor',[BloodDonorController::class,'store']);

Route::get('search-blood',[BloodDonorController::class,'searchBloods']);

Route::get('request-blood',[RequestBloodController::class,'index']);
Route::post('request-blood',[RequestBloodController::class,'store']);