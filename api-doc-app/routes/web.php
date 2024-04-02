<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WorkspaceController;


Route::group(['middleware' => 'guest'],function(){

    Route::get('/register',[AuthController::class,'signup'])->name('signup');
    Route::post('/register',[AuthController::class,'register'])->name('register');

    Route::get('/login',[AuthController::class,'signin'])->name('signin');
    Route::post('/login',[AuthController::class,'login'])->name('login');

    Route::get('/forgot-password',[AuthController::class,'forgot'])->name('forgot');
});



Route::group(['middleware' => 'auth'],function(){
    Route::get('/', [MainController::class, 'index'])->name('home.index');
    Route::get('/home', [MainController::class, 'index'])->name('home.index');

    Route::get('/workspace/create', [WorkspaceController::class, 'create'])->name('workspace.create');
    Route::post('/workspace/create', [WorkspaceController::class, 'store'])->name('workspace.store');

    Route::get('/workspace/{workspace}', [WorkspaceController::class, 'index'])->name('workspace.index');
    Route::get('/workspace/{workspace}/add-collection', [WorkspaceController::class, 'addCollection'])->name('workspace.addCollection');


    Route::get('/workspace/{workspace}/add-file', [WorkspaceController::class, 'add_file'])->name('workspace.add_file');

    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});
