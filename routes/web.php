<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

// nomor 1
Route::get('/', [CompanyController::class, 'index']);

// nomor 2
Route::prefix('product')->group(function () {
    Route::get('/list', [CompanyController::class, 'product']);
   });

// nomor 3
    Route::get('/news/{id}', [CompanyController::class, 'news']);

// nomor 4
Route::prefix('program')->group(function () {
    Route::get('/list', [CompanyController::class, 'program']);
   });

// nomor 5
   Route::get('/aboutus', [CompanyController::class, 'aboutus']);

// nomor 6
    Route::resource('index', CompanyController::class);
   