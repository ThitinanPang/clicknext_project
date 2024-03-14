<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ResetPasswordController;




Route::resource('workspace',WorkspaceController::class);
Route::resource('home',HomepageController::class);
Route::resource('signin',SigninController::class);
Route::resource('signup',SignupController::class);
Route::resource('reset-password',ResetPasswordController::class);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willphp
| be assigned to the "web" middleware group. Make something great!
|
*/

