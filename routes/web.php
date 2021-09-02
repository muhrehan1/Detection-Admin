<?php

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
use App\Http\Controllers\DetectsController;

Route::get('/', [DetectsController::class, 'detection'])->name('detection.admin');
Route::get('/admin/register', [DetectsController::class, 'register'])->name('detection.register');
Route::get('/admin/login', [DetectsController::class, 'login'])->name('detection.login');
Route::get('/list/admin', [DetectsController::class, 'adminlist'])->name('detection.adminlist');
Route::get('/register/adminfront', [DetectsController::class, 'adminfrontregister'])->name('detection.adminfrontregister');

