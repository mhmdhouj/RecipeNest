<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

// Admin routes
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');
    Route::get('/admin/recipes/create', [AdminsController::class, 'create'])->name('admin.recipes.create');
    Route::get('/admin/recipes/show', [AdminsController::class, 'show'])->name('admin.recipes.show');
    Route::delete('/admin/recipes/delete/{recipe}', [AdminsController::class, 'delete'])->name('admin.recipes.delete');
    Route::post('/admin/recipes/store', [AdminsController::class, 'store'])->name('admin.recipes.store');
});

require __DIR__.'/auth.php';