<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SayingController;
use App\Http\Controllers\DashboardUcapanController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\InviteController;

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

Route::get('/', [SayingController::class, 'index'])->name('tampil');

Route::get('/dashboard', function(){
    return view('dashboard.index');
    });

Route::post('/tambahucapan',[SayingController::class,'tambahucapan'])->name('tambahucapan');

Route::resource('/dashboard/ucapans', DashboardUcapanController::class);
Route::resource('/dashboard/weddings', WeddingController::class);
Route::resource('/dashboard/invites', InviteController::class);