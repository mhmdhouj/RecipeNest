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

    public function create()
    {
        return view('admin.recipes.create');
    }

    // Store a new recipe (for admin dashboard)
    // Store a new recipe (for admin dashboard)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'difficulty' => 'required|string|in:easy,medium,hard',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cooking_time' => 'required|string',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('recipe_images', 'public');

        // Create the recipe
        Recipe::create([
            'name' => $request->name,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'difficulty' => $request->difficulty,
            'image_path' => $imagePath,
            'cooking_time' => $request->cooking_time,
        ]);
        //dd($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Recipe added successfully!');
    }
}
