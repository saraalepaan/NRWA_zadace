<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/product', ProductController::class); // Promijenjeno '/product' u '/products'

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Promijenjeno 'ProductController@edit' u [ProductController::class, 'edit']

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Promijenjeno 'ProductController@destroy' u [ProductController::class, 'destroy']

Route::resource('product', App\Http\Controllers\ProducttController::class);

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');