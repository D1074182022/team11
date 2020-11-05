<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\setController;
use App\Http\Controllers\storeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('set',  [setController::class,'index']);
Route::get('set/create',[setController::class,'create']);
Route::get('set/{id}',[setController::class,'show'])->where('id' , '[0-9]+');
Route::get('set/{id}/edit', [setController::class,'edit'])->where('id' , '[0-9]+');


Route::get('store',[storeController::class,'index']);
Route::get('store/create',[storeController::class,'create']);
Route::get('store/{id}',[storeController::class,'show'])->where('id' , '[0-9]+');
Route::get('store/{id}/edit',[storeController::class,'edit'])->where('id' , '[0-9]+');
