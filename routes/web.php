<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LamaranController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/landing', function () {
    return view('landing');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('logout', function () {
    return view('login');
});

Route::post('register', function () {
    return view('register');
});

Route::post('/template', function () {
    return view('template');
});

Route::post('auth',[UserController::class,'auth']);
Route::post('register',[UserController::class,'register']);
Route::post('register/create',[UserController::class,'create']);

Route::get('alumni',[AlumniController::class,'show']);
Route::get('alumni/add',[AlumniController::class,'add']);
Route::post('alumni/create',[AlumniController::class,'create']);
Route::get('alumni/edit/{id}',[AlumniController::class,'edit']);
Route::post('alumni/update/{id}',[AlumniController::class,'update']);
Route::get('alumni/hapus/{id}',[AlumniController::class,'hapus']);

Route::get('perusahaan',[PerusahaanController::class,'show']);
Route::get('perusahaan/add',[PerusahaanController::class,'add']);
Route::post('perusahaan/create',[PerusahaanController::class,'create']);
Route::get('perusahaan/edit/{id}',[PerusahaanController::class,'edit']);
Route::post('perusahaan/update/{id}',[PerusahaanController::class,'update']);
Route::get('perusahaan/hapus/{id}',[PerusahaanController::class,'hapus']);

Route::get('lamaran',[LamaranController::class,'show']);
Route::get('lamaran/add',[LamaranController::class,'add']);
Route::post('lamaran/create',[LamaranController::class,'create']);
Route::get('lamaran/edit/{id}',[LamaranController::class,'edit']);
Route::post('lamaran/update/{id}',[LamaranController::class,'update']);
Route::get('lamaran/hapus/{id}',[LamaranController::class,'hapus']);
