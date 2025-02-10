<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name','description','difficulty','diff_value','cooking_time','image_path', 'ingredients'];

    public function favoritedBy(){
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'recipe_id');
    }
}
