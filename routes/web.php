<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [SiswaController::class, 'index']);
Route::get('/create', [SiswaController::class, 'create']);
Route::post('/store', [SiswaController::class, 'store']);
Route::get('/edit/{nis:nis}', [SiswaController::class, 'edit']);
Route::put('/update/{nis}', [SiswaController::class, 'update']);
Route::delete('delete/{nis}', [SiswaController::class, 'destroy']);

