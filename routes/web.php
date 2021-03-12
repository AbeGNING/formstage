<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\NavigationController;

Route::get('/',                 [NavigationController::class, 'accueil'])->name('accueil');
Route::get('menu-jour',         [NavigationController::class, 'afficherMenu'])->name('menu');

Route::resource('commande',     CommandeController::class);



Route::get('/dashboard', function () {
    return view('pages.backend.accueil');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
