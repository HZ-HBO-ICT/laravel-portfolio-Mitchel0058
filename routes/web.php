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
Route::post('/faq', [FaqController::class, 'store']);
Route::get('/faq/create', [FaqController::class, 'create']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/aside', [AsideController::class, 'show']);
Route::get('/blog/{post}', [PostsController::class, 'show']);

// php artisan make:controller <NameController>
