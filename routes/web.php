<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return redirect()->route('resumes.index');});


Route::middleware('auth')->group(function (){
    Route::post('/logout',[\App\Http\Controllers\Auth2\LoginController::class,'logout'])->name('logout');
    Route::resource('resumes',ResumeController::class)->except('index','show');

    Route::prefix('admin')->as('admin.')->middleware('hasRole:Admin')->group(function () {
        Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('users.index');
        Route::get('/users/search', [\App\Http\Controllers\UserController::class, 'index'])->name('users.search');
        Route::get('/user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
        Route::put('/user/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
        Route::put('/users/{user}/ban', [\App\Http\Controllers\UserController::class, 'ban'])->name('users.ban');
        Route::put('/users/{user}/unban', [\App\Http\Controllers\UserController::class, 'unban'])->name('users.unban');
        Route::get('/roles', [\App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
        Route::get('/res', [\App\Http\Controllers\ResumeController::class, 'resList'])->name('res.index');
        Route::put('/res/{resume}', [\App\Http\Controllers\ResumeController::class, 'resUpdate'])->name('res.update');

    });
});
Route::resource('resumes',ResumeController::class)->only('index','show');
Route::resource('contact',ContactController::class);
Route::get('/list',[ResumeController::class,'list'])->name('resumes.list');
Route::get('/register',[\App\Http\Controllers\Auth2\RegisterController::class,'create'])->name('register.form');
Route::post('/register',[\App\Http\Controllers\Auth2\RegisterController::class,'register'])->name('register');
Route::get('/login',[\App\Http\Controllers\Auth2\LoginController::class,'create'])->name('login.form');
Route::post('login',[\App\Http\Controllers\Auth2\LoginController::class,'login'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
