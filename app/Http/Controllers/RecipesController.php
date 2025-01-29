<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function index(){
        $recipes = Recipe::query()->paginate();
        return view("home", ['recipes' => $recipes]);
    }

    public function searchRecipe(Request $request){
        $data = $request->validate(
            ['search_input'=>['string']]
        );

        $name = $data['search_input'];

        $recipes = Recipe::where("name","like","%$name%")
                ->orWhere("ingredients","like","%$name%")
                ->paginate();
        
        return view("home",['recipes'=>$recipes]);
    }
}
