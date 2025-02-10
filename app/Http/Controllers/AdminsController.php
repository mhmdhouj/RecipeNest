<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;

class AdminsController extends Controller
{
    public function create()
    {
        return view('admin.recipes.create');
    }

    // Store a new recipe (for admin dashboard)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'description' => 'required|string',
            'difficulty' => 'required|string|in:Easy,Moderate,Hard',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cooking_time' => 'required|integer',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('images', 'public');

        $diff_val = 1;
        
        if ($request->difficulty == 'Moderate'){
            $diff_val = 2;
        }
        elseif ($request->difficulty == 'Hard'){
            $diff_val = 3;
        }

        // Create the recipe
        Recipe::create([
            'name' => $request->name,
            'ingredients' => $request->ingredients,
            'description' => $request->description,
            'difficulty' => $request->difficulty,
            'diff_value' => $diff_val,
            'image_path' => $imagePath,
            'cooking_time' => $request->cooking_time,
        ]);
        //dd($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Recipe added successfully!');
    }

    public function show(){
        $recipes = Recipe::all();
        return view('admin.recipes.show', ['recipes' => $recipes]);
    }

    public function delete(Recipe $recipe){
        $recipe->delete();
        return redirect()->back();
    }
}
