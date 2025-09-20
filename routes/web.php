<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'index']);
Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/nextpages',[StudentController::class,'nextpages'])->name('nextpages');   #dd
Route::get('/add-data',[StudentController::class,'addData'])->name('add-data');   #dd
Route::post('/add-post',[StudentController::class,'addDataPost'])->name('add-post');   #dd