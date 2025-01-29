<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        Recipe::create([
            'name'=> 'Spaghetti Carbonara',
            'ingredients'=>'200g spaghetti, 2 large eggs, 100g pancetta (or bacon), 50g Pecorino Romano cheese (or Parmesan), 2 cloves garlic (optional), salt, freshly ground black pepper, 1-2 tablespoons olive oil (optional), fresh parsley (optional, for garnish)',
            'description' => 'Cook 200g of spaghetti in boiling salted water until al dente. While the pasta cooks, dice 100g of pancetta and fry it in a pan until crispy. In a bowl, whisk together 2 large eggs and 50g of grated Pecorino Romano cheese. Once the pasta is done, reserve 1 cup of pasta water, then drain the spaghetti. Add the hot pasta to the pan with the pancetta and toss to combine. Remove the pan from heat, then quickly mix in the egg and cheese mixture, adding reserved pasta water as needed to create a creamy sauce. Season with freshly ground black pepper and serve immediately, garnished with extra Pecorino Romano cheese.',
            'difficulty' => 'Moderate',
            'cooking_time' => '20 mins',
            'image_path' => 'images/Spaghetti_Carbonara.jpg'
        ]);

        Recipe::create([
            'name'=> 'Filipino Beef Steak',
            'ingredients'=>'500g beef sirloin (thinly sliced), 1/4 cup soy sauce, 3 tablespoons calamansi juice (or lemon juice), 3 cloves garlic (minced), 1 medium onion (sliced into rings), 1 teaspoon sugar, 1/4 teaspoon ground black pepper, 2 tablespoons cooking oil, 1/2 cup water, salt (to taste)',
            'description' => 'Season a thick-cut beef steak (e.g., ribeye or sirloin) generously with salt and pepper on both sides. Preheat a skillet or grill over high heat and add a small amount of oil. Sear the steak for 2-3 minutes on each side until a golden-brown crust forms. Reduce the heat to medium and continue cooking for 4-6 minutes per side, or until the internal temperature reaches your desired doneness (125°F for rare, 135°F for medium-rare, 145°F for medium). Add butter, garlic, and fresh herbs (like thyme or rosemary) to the pan during the last 2 minutes of cooking, basting the steak with the melted butter. Remove the steak from the heat, let it rest for 5-10 minutes to allow the juices to redistribute, then slice and serve immediately.',
            'difficulty' => 'Moderate',
            'cooking_time' => '30 mins',
            'image_path' => 'images/Beef_Steak.jpg'
        ]);

        Recipe::create([
            'name'=> 'Fettucine Alfredo',
            'ingredients'=>'250g fettuccine pasta, 2 tablespoons unsalted butter, 1 cup heavy cream, 1 cup grated Parmesan cheese, 2 cloves garlic (minced), salt (to taste), freshly ground black pepper (to taste), fresh parsley (optional, for garnish)',
            'description' => 'To make fettuccine Alfredo, cook 12 ounces of fettuccine in salted boiling water until al dente, then drain, reserving 1 cup of pasta water. In a large pan over medium heat, melt 4 tablespoons of butter and stir in 1 cup of heavy cream, cooking for 2–3 minutes until warmed through. Gradually add 1 ½ cups of grated Parmesan cheese, stirring constantly until melted and the sauce is smooth. Toss the cooked fettuccine in the sauce, adding reserved pasta water a little at a time to reach your desired consistency. Season with salt, pepper, and a pinch of nutmeg (optional), then serve immediately, garnished with extra Parmesan and fresh parsley if desired.',
            'difficulty' => 'Easy',
            'cooking_time' => '25 mins',
            'image_path' => 'images/Fettucini_Alfredo.jpg'
        ]);
    }
}
