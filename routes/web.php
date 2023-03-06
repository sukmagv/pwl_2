<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
// use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
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

// // nomor 1
// Route::get('/home', [HomeController::class, 'index']);

// // nomor 2
// Route::prefix('product')->group(function () {
//     Route::get('/list', [ProductController::class, 'product']);
//    });

// // nomor 3
//     Route::get('/news/{id}', [NewsController::class, 'news']);

// // nomor 4
// Route::prefix('program')->group(function () {
//     Route::get('/list', [ProgramController::class, 'program']);
//    });

// // nomor 5
//    Route::get('/aboutus', [AboutController::class, 'aboutus']);

// // nomor 6
//     Route::resource('contactus', ContactController::class);

Route::get('/', [BerandaController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/kuliah', [KuliahController::class, 'index']); 

Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/hobi', [HobiController::class, 'index']);