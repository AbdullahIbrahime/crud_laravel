<?php

use App\Http\Controllers\queries;
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

Route::get('/',[queries::class,'index']);
Route::get('/delete/{id}',[queries::class,'delete']);
Route::get('/edit/{id}',[queries::class,'edit']);
Route::post('/update',[queries::class,'update']);
Route::get('/insert',[queries::class,'insert']);
Route::post('/insert_query',[queries::class,'insert_query']);