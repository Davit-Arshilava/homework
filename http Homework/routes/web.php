<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain('admin.localhost')->group( function () {
    Route::get('/', [AdminController::class, 'show'])->name('admin');
    Route::post('/', [AdminController::class, 'createPost']);
    Route::get('/{post}',[AdminController::class, 'showPost'])->name('showPostAdmin');
    Route::get('/delete/{post}',[AdminController::class, 'deletePost'])->name('deletePost');
    Route::get('/delete/{post}/{comment}',[AdminController::class, 'deleteComment'])->name('deleteComment');
});

Route::get('/', [MainController::class, 'show'])->name('main');
Route::get('/{post}', [MainController::class, 'showPost'])->name('showPost');

