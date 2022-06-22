<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PackagesController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/author', [AuthorController::class, 'index']);
Route::get('/calculator', [CalculatorController::class, 'index']);
Route::get('/watchlist', [WatchlistController::class, 'index']);
Route::get('/admin', [DashboardAdminController::class, 'index']);

Route::get('/admin/form', [FormController::class, 'index']);
Route::post('/admin/add', [FormController::class, 'add']);

Route::get('/admin/packages', [PackagesController::class, 'index']);