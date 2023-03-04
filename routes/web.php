<?php

use App\Http\Controllers\DafilmController;
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

Route::get('/', [DafilmController::class, 'trending'],)->name('home');
Route::get('/toprated', [DafilmController::class, 'top_rated'],)->name('toprated');
Route::get('/nowplaying', [DafilmController::class, 'now_playing'],)->name('nowplaying');
Route::get('/upcoming', [DafilmController::class, 'upcoming'],)->name('upcoming');
Route::get('/detail/{id}', [DafilmController::class, 'detail'],)->name('detail');
Route::get('/test', [DafilmController::class, 'test'],)->name('test');
