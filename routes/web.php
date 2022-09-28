<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PortfolioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TopSectionController;
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

Route::get('/',[PortfolioController:: class, 'index'])->name('/');

Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/top-section', [TopSectionController::class, 'index'])->name('top.section');
Route::post('/section-top-store', [TopSectionController::class, 'store'])->name('store.top.section');
Route::get('/top-section-all', [TopSectionController::class, 'show'])->name('show.top.section');
Route::delete('/section-top-destroy/{id}', [TopSectionController::class, 'destroy'])->name('destroy.top.section');
