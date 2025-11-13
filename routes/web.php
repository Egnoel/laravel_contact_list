<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

 Route::get('/',[ContactController::class,'index'])->name('contacts.index');
Route::resource('contacts', ContactController::class);
Route::get('/search', SearchController::class)->name('contacts.search');
