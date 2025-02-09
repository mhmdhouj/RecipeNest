<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function index(Request $request){
        $query = Recipe::query();
        
        if ($request->has('sort')){
            if ($request->sort == 'time_asc'){
                $query->orderBy('cooking_time','asc');
            }
            elseif ($request->sort == 'time_desc'){
                $query->orderBy('cooking_time','desc');
            }
            elseif ($request->sort == 'difficulty_asc'){
                $query->orderBy('difficulty','asc');
            }
            else {
                $query->orderBy('difficulty','desc');
            }
        }

        $recipes = $query->get();
        $user = request()->user();
        $favoriteRecipes = $user ? $user->favorites()->get() : collect();
        return view("home", ['recipes' => $recipes, 'favorites' => $favoriteRecipes]);
    }

    public function searchRecipe(Request $request){
        $data = $request->validate([
            'search_input'=>['string']
        ]);

        $name = $data['search_input'];

        $recipes = Recipe::where("name","like","%$name%")
                ->orWhere("ingredients","like","%$name%")
                ->get();
        
        $user = request()->user();
        $favoriteRecipes = $user ? $user->favorites()->get() : collect();
        return view("home", ['recipes' => $recipes, 'favorites' => $favoriteRecipes]);
    }

    public function showDetails(Recipe $recipe){
        $user = request()->user();
        $favoriteRecipes = $user ? $user->favorites()->get() : collect();
        return view("details",['recipe' => $recipe, 'favorites' => $favoriteRecipes]);
    }
}
