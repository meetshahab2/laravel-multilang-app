<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\SetLocale;


Route::middleware(SetLocale::class)->prefix('{locale}')->group(function (){
   // Route::get('/home', [WelcomeController::class, 'index']);

    Route::get('/about', [WelcomeController::class, 'about'])->name('about');
    
   
});
Route::get('/home', function () {
    return app()->getLocale();
});

Route::get('/about', [WelcomeController::class, 'about'])->name('about');
