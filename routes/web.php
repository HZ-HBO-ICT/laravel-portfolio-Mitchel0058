<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AsideController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/aside', [AsideController::class, 'show']);

Route::put('/faq/edit/{id}', [FaqController::class, 'update']);
Route::delete('/faq/edit/{id}', [FaqController::class, 'destroy']);
Route::post('/faq/create', [FaqController::class, 'store']);
Route::get('/faq/edit/{id}', [FaqController::class, 'edit']);
Route::get('/faq', [FaqController::class, 'create']);
Route::get('/faq', [FaqController::class, 'index']);

Route::put('/blog/edit/{id}', [BlogController::class, 'update']);
Route::delete('/blog/edit/{id}', [BlogController::class, 'destroy']);
Route::post('/blog', [BlogController::class, 'store']);
Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{post}', [PostsController::class, 'show']);
Route::get('/blog', [BlogController::class, 'index']);
