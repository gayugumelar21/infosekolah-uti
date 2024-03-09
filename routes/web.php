<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalmaanController;
use App\Http\Controllers\LampungController;
use App\Http\Controllers\AcehController;

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

Route::get('/testing', [HalmaanController::class, 'testing']);
Route::get('/', [HalmaanController::class, 'index']);
// LAMPUNG
Route::get('/lampung', [LampungController::class, 'provlampung']);
Route::get('/lampung/lampungbarat', [LampungController::class, 'kablampungbarat']);
Route::get('/lampung/lampungselatan', [LampungController::class, 'kablampungselatan']);
Route::get('/lampung/lampungtengah', [LampungController::class, 'kablampungtengah']);
Route::get('/lampung/lampungtimur', [LampungController::class, 'kablampungtimur']);
Route::get('/lampung/lampungutara', [LampungController::class, 'kablampungutara']);
Route::get('/lampung/pesawaran', [LampungController::class, 'pesawaran']);
Route::get('/lampung/tanggamus', [LampungController::class, 'tanggamus']);
Route::get('/lampung/tulangbawang', [LampungController::class, 'tulangbawang']);
Route::get('/lampung/waykanan', [LampungController::class, 'waykanan']);
Route::get('/lampung/bandarlampung', [LampungController::class, 'bandarlampung']);
Route::get('/lampung/metro', [LampungController::class, 'metro']);

// ACEH
Route::get('/aceh', [AcehController::class, 'provaceh']);
Route::get('/aceh/acehbaratdaya', [AcehController::class, 'kabacehbaratdaya']);
Route::get('/aceh/acehbesar', [AcehController::class, 'kabacehbesar']);
Route::get('/aceh/acehjaya', [AcehController::class, 'kabacehjaya']);
Route::get('/aceh/acehnaganraya', [AcehController::class, 'kabacehnaganraya']);
Route::get('/aceh/acehselatan', [AcehController::class, 'kabacehselatan']);
Route::get('/aceh/acehsingkil', [AcehController::class, 'kabacehsingkil']);
Route::get('/aceh/acehtamiang', [AcehController::class, 'kabacehtamiang']);
Route::get('/aceh/acehtengah', [AcehController::class, 'kabacehtengah']);
Route::get('/aceh/acehtenggara', [AcehController::class, 'kabacehtenggara']);
Route::get('/aceh/acehtimur', [AcehController::class, 'kabacehtimur']);
Route::get('/aceh/acehutara', [AcehController::class, 'kabacehutara']);
Route::get('/aceh/benermeriah', [AcehController::class, 'kabbenermeriah']);