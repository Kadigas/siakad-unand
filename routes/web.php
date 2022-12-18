<?php

namespace App\Http\Controllers;

use GuzzleHttp\Cookie\SessionCookieJar;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/mhs', [MahasiswaController::class, 'index'])->middleware('isLogin');
Route::get('/mhs/logbook', [MahasiswaController::class, 'logbook'])->middleware('isLogin');
Route::get('/mhs/tugas', [MahasiswaController::class, 'tugas'])->middleware('isLogin');

Route::get('/mhs/modul/{id}', [ModulController::class, 'show'])->middleware('isLogin');

Route::resource('mhs', MahasiswaController::class)->middleware('isLogin');

Route::get('/dosen', [DosenController::class, 'index'])->middleware('isLogin');

Route::get('/admin', [AdminController::class, 'index'])->middleware('isLogin');

Route::get('/session/login', [SessionController::class, 'login'])->middleware('isGuest');
Route::post('/session/signin', [SessionController::class, 'signin']);
Route::get('/session/logout', [SessionController::class, 'logout']);
Route::get('/session/register', [SessionController::class, 'register']);
Route::post('/session/create', [SessionController::class, 'create']);