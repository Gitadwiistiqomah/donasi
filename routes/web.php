<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin', 
    'as' => 'admin.' 
], function() {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
Route::get ('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create') ;
Route::post ('/categories', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store') ;
Route::get ('/categories/edit{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit') ;
Route::put ('/categories/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update') ;
Route::delete ('/categories/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy') ;
Route::get ('/categories/{id}', [App\Http\Controllers\CategoriesController::class, 'show'])->name('categories.show') ;

});
