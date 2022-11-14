<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\WeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('Nosotros', [WeController::class, 'index'])->name('we.index');
Route::get('Admin', [HomeAdminController::class, 'index'])->name('slider.index');
Route::post('Admin/Slider/Update', [HomeAdminController::class, 'storeslider'])->name('slider.store.slider');
Route::post('Admin/Banner/Update', [HomeAdminController::class, 'storebanner'])->name('slider.store.banner');
Route::post('Admin/Ad/Update', [HomeAdminController::class, 'storead'])->name('slider.store.ad');
Route::post('Admin/New/Update', [HomeAdminController::class, 'storenew'])->name('slider.store.new');
Route::post('Admin/Psy/Update', [HomeAdminController::class, 'storepsy'])->name('slider.store.psy');
