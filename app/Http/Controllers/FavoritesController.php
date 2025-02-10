<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;

class FavoritesController extends Controller
{
    public function addFavorite(Recipe $recipe){
        $user = request()->user();
        $user->favorites()->attach($recipe->id);
        return redirect()->back()->with('success', 'Recipe added to favorites!');
    }

    public function removeFavorite(Recipe $recipe){
        $user = request()->user();
        $user->favorites()->detach($recipe->id);
        return redirect()->back();
    }

    public function showFavorites(){
        $user = request()->user();
        $favoriteRecipes = $user->favorites()->get();
        return view("favorites", ['favorites' => $favoriteRecipes]);
    }

}
