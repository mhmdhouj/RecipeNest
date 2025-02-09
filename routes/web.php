<?php

use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecipesController::class, 'index'])->name('home');
Route::get('/search', [RecipesController::class, 'searchRecipe'])->name('search');
Route::get('/details/{recipe}', [RecipesController::class, 'showDetails'])->name('details');


Route::middleware('auth')->group(function () {
    Route::post('/favorites/{recipe}', [FavoritesController::class, 'addFavorite'])->name('favorites.add');
    Route::delete('/favorites/{recipe}', [FavoritesController::class, 'removeFavorite'])->name('favorites.remove');
    Route::get('/favorites', [FavoritesController::class, 'showFavorites'])->name('favorites.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
