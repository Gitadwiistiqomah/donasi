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

Route::get('/campaign', [App\Http\Controllers\CampaignController::class, 'index'])->name('campaign.index');
Route::get ('/campaign/create', [App\Http\Controllers\CampaignController::class, 'create'])->name('campaign.create') ;
Route::post ('/campaign', [App\Http\Controllers\CampaignController::class, 'store'])->name('campaign.store') ;
Route::get ('/campaign/edit{id}', [App\Http\Controllers\CampaignController::class, 'edit'])->name('campaign.edit') ;
Route::put ('/campaign/{id}', [App\Http\Controllers\CampaignController::class, 'update'])->name('campaign.update') ;
Route::delete ('/campaign/{id}', [App\Http\Controllers\CampaignController::class, 'destroy'])->name('campaign.destroy') ;
Route::get ('/campaign/{id}', [App\Http\Controllers\CampaignController::class, 'show'])->name('campaign.show') ;

});

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings.index');
Route::get ('/settings/create', [App\Http\Controllers\SettingsController::class, 'create'])->name('settings.create') ;
Route::post ('/settings', [App\Http\Controllers\SettingsController::class, 'store'])->name('settings.store') ;
Route::get ('/settings/edit{id}', [App\Http\Controllers\SettingsController::class, 'edit'])->name('settings.edit') ;
Route::put ('/settings/{id}', [App\Http\Controllers\SettingsController::class, 'update'])->name('settings.update') ;
Route::delete ('/settings/{id}', [App\Http\Controllers\SettingsController::class, 'destroy'])->name('settings.destroy') ;
Route::get ('/settings/{id}', [App\Http\Controllers\SettingsController::class, 'show'])->name('settings.show') ;