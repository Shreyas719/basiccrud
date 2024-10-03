<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);
Route::post('category/store', [CategoryController::class, 'store']);
Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
Route::get('category/{id}/destroy', [CategoryController::class, 'destroy']);
