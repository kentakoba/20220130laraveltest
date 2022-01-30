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

// Route::get('/form', function () {
//     return view('welcome');
// });

Route::get('/form',[App\Http\Controllers\SampleFormController::class,'show'])->name('form.show');
Route::post('/form',[App\Http\Controllers\SampleFormController::class,'post'])->name('form.post');
Route::get('/form/confirm',[App\Http\Controllers\SampleFormController::class,'confirm'])->name('form.confirm');
Route::post('/form/confirm',[App\Http\Controllers\SampleFormController::class,'send'])->name('form.send');
Route::get('/form/thanks',[App\Http\Controllers\SampleFormController::class,'complete'])->name('form.complete');
// 管理画面
Route::get('/admin',[App\Http\Controllers\SampleFormController::class,'search'])->name('form.search');
Route::post('/admin',[App\Http\Controllers\SampleFormController::class,'index'])->name('form.index');
Route::post('/destroy',[App\Http\Controllers\SampleFormController::class,'destroy'])->name('form.destroy');
