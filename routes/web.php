<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index']);

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'hi', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect('/');
})->name('lang.switch');