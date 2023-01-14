<?php

use App\Http\Controllers\TodoController;
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

Route::get('/todo' ,[TodoController::class , 'index']);
Route::get('/todo/{id}' , [TodoController::class , 'show']);
Route::get('/create' , [TodoController::class , 'create'])->name('add');
Route::post('/store' , [TodoController::class , 'store'])->name('store');
Route::get('/todo/{id}/edit' , [TodoController::class , 'edit'])->name('edit');
Route::post('/todo/{id}' , [TodoController::class , 'update'])->name('update');
Route::get('/todo/{id}/delete' , [TodoController::class  ,'delete']);
Route::get('/todo/{id}/complete' , [TodoController::class  ,'complete']);
