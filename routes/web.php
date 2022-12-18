<?php

namespace App\Http\Controllers;
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
    return view('welcome');
});

Route::get('/mhs', [MahasiswaController::class, 'index']);
Route::get('/mhs/login', [MahasiswaController::class, 'login']);
Route::post('/mhs/signin', [MahasiswaController::class, 'signin']);
Route::get('/mhs/logout', [MahasiswaController::class, 'logout']);
Route::get('/mhs/register', [MahasiswaController::class, 'register']);
Route::post('/mhs/create', [MahasiswaController::class, 'create']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/login', [DosenController::class, 'login']);
Route::post('/dosen/signin', [DosenController::class, 'signin']);
Route::get('/dosen/logout', [DosenController::class, 'logout']);
Route::get('/dosen/register', [DosenController::class, 'register']);
Route::post('/dosen/create', [DosenController::class, 'create']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/signin', [AdminController::class, 'signin']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin/register', [AdminController::class, 'register']);
Route::post('/admin/create', [AdminController::class, 'create']);