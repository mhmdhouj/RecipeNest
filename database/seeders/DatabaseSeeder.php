<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\User;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> bcrypt('12345'),
        ]);

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@recipeNest.com',
            'password' => Hash::make('admin123admin'), 
        ]);

        Recipe::create([
            'name'=> 'Spaghetti Carbonara',
            'ingredients'=>'200g spaghetti, 2 large eggs, 100g pancetta (or bacon), 50g Pecorino Romano cheese (or Parmesan), 2 cloves garlic (optional), salt, freshly ground black pepper, 1-2 tablespoons olive oil (optional), fresh parsley (optional)',
            'description' => 'Cook 200g of spaghetti in boiling salted water until al dente. While the pasta cooks, dice 100g of pancetta and fry it in a pan until crispy. In a bowl, whisk together 2 large eggs and 50g of grated Pecorino Romano cheese. Once the pasta is done, reserve 1 cup of pasta water, then drain the spaghetti. Add the hot pasta to the pan with the pancetta and toss to combine. Remove the pan from heat, then quickly mix in the egg and cheese mixture, adding reserved pasta water as needed to create a creamy sauce. Season with freshly ground black pepper and serve immediately, garnished with extra Pecorino Romano cheese.',
            'difficulty' => 'Easy',
            'diff_value' => 1,
            'cooking_time' => 20,
            'image_path' => 'images/Spaghetti_Carbonara.jpg'
        ]);

        Recipe::create([
            'name'=> 'Filipino Beef Steak',
            'ingredients'=>'500g beef sirloin (thinly sliced), 1/4 cup soy sauce, 3 tablespoons calamansi juice (or lemon juice), 3 cloves garlic (minced), 1 medium onion (sliced into rings), 1 teaspoon sugar, 1/4 teaspoon ground black pepper, 2 tablespoons cooking oil, 1/2 cup water, salt (to taste)',
            'description' => 'Season a thick-cut beef steak (e.g., ribeye or sirloin) generously with salt and pepper on both sides. Preheat a skillet or grill over high heat and add a small amount of oil. Sear the steak for 2-3 minutes on each side until a golden-brown crust forms. Reduce the heat to medium and continue cooking for 4-6 minutes per side, or until the internal temperature reaches your desired doneness (125°F for rare, 135°F for medium-rare, 145°F for medium). Add butter, garlic, and fresh herbs (like thyme or rosemary) to the pan during the last 2 minutes of cooking, basting the steak with the melted butter. Remove the steak from the heat, let it rest for 5-10 minutes to allow the juices to redistribute, then slice and serve immediately.',
            'difficulty' => 'Moderate',
            'diff_value' => 2,
            'cooking_time' => 30,
            'image_path' => 'images/Beef_Steak.jpg'
        ]);

        Recipe::create([
            'name'=> 'Fettucine Alfredo',
            'ingredients'=>'250g fettuccine pasta, 2 tablespoons unsalted butter, 1 cup heavy cream, 1 cup grated Parmesan cheese, 2 cloves garlic (minced), salt (to taste), freshly ground black pepper (to taste), fresh parsley (optional)',
            'description' => 'To make fettuccine Alfredo, cook 12 ounces of fettuccine in salted boiling water until al dente, then drain, reserving 1 cup of pasta water. In a large pan over medium heat, melt 4 tablespoons of butter and stir in 1 cup of heavy cream, cooking for 2–3 minutes until warmed through. Gradually add 1 ½ cups of grated Parmesan cheese, stirring constantly until melted and the sauce is smooth. Toss the cooked fettuccine in the sauce, adding reserved pasta water a little at a time to reach your desired consistency. Season with salt, pepper, and a pinch of nutmeg (optional), then serve immediately, garnished with extra Parmesan and fresh parsley if desired.',
            'difficulty' => 'Easy',
            'diff_value' => 1,
            'cooking_time' => 25,
            'image_path' => 'images/Fettucini_Alfredo.jpg'
        ]);

        Recipe::create([
            'name'=> 'Pizza Pepperoni',
            'ingredients'=>'250g pizza dough, 100g tomato sauce, 150g mozzarella cheese, 80g pepperoni, 10g olive oil, 2g oregano, 2g basil, 1g garlic powder, 1g salt, 1g black pepper',
            'description' => 'Preheat your oven to 220°C (428°F). Roll out the pizza dough into a round shape and place it on a baking tray. Spread the tomato sauce evenly over the dough, leaving a small border around the edges. Sprinkle the mozzarella cheese over the sauce, then layer the pepperoni slices on top. Drizzle with olive oil and season with oregano, basil, garlic powder, salt, and black pepper. Bake for 12-15 minutes or until the crust is golden and the cheese is bubbling. Remove from the oven, let it cool for a few minutes, then slice and enjoy!',
            'difficulty' => 'Moderate',
            'diff_value' => 2,
            'cooking_time' => 30,
            'image_path' => 'images/Pizza_Pepperoni.jpg'
        ]);

        Recipe::create([
            'name'=> 'Chicken Shawarma',
            'ingredients'=>'250g chicken breast, 100g yogurt, 30g lemon juice, 10g garlic, 5g paprika, 5g cumin, 5g coriander, 3g salt, 2g black pepper, 2g turmeric, 2g cinnamon, 50g tahini, 50g mayonnaise, 100g pita bread, 50g lettuce, 50g tomato, 30g onion, 10g pickles',
            'description' => 'Marinate the chicken breast in yogurt, lemon juice, garlic, paprika, cumin, coriander, salt, black pepper, turmeric, and cinnamon for at least 2 hours. Heat a pan or grill over medium heat and cook the chicken until golden brown and fully cooked, about 8-10 minutes per side. Slice the chicken into thin strips. Warm the pita bread and spread a mixture of tahini and mayonnaise on it. Add lettuce, tomato, onion, pickles, and the sliced chicken. Wrap tightly and serve warm.',
            'difficulty' => 'Moderate',
            'diff_value' => 2,
            'cooking_time' => 45,
            'image_path' => 'images/Chicken_Shawarma.jpg'
        ]);
    }
}
