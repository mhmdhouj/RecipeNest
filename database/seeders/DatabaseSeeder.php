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

        Recipe::create([
            'name'=> 'Butter Chicken',
            'ingredients'=>'500g boneless chicken, 2 tablespoons butter, 1 cup tomato puree, 1/2 cup heavy cream, 1/2 cup yogurt, 1 onion (chopped), 3 cloves garlic (minced), 1-inch ginger (grated), 1 teaspoon garam masala, 1 teaspoon turmeric, 1 teaspoon cumin, 1 teaspoon coriander, 1/2 teaspoon chili powder, salt (to taste), fresh cilantro (for garnish)',
            'description' => 'Marinate the chicken in yogurt, turmeric, and salt for at least 1 hour. Heat butter in a pan and sauté onions, garlic, and ginger until soft. Add garam masala, cumin, coriander, and chili powder, cooking for a minute. Stir in the tomato puree and simmer for 10 minutes. Add the marinated chicken and cook until tender. Pour in the heavy cream and simmer for 5 more minutes. Garnish with fresh cilantro and serve with naan or rice.',
            'difficulty' => 'Moderate',
            'diff_value' => 2,
            'cooking_time' => 40,
            'image_path' => 'images/Butter_Chicken.jpg'
        ]);
        
        Recipe::create([
            'name'=> 'Beef Stroganoff',
            'ingredients'=>'500g beef sirloin (sliced), 1 onion (chopped), 2 cloves garlic (minced), 200g mushrooms (sliced), 1 cup beef broth, 1 cup sour cream, 2 tablespoons flour, 2 tablespoons butter, 1 teaspoon Dijon mustard, salt (to taste), black pepper (to taste), 250g egg noodles (cooked)',
            'description' => 'In a pan, melt butter and sauté onions, garlic, and mushrooms until soft. Add the beef slices and cook until browned. Sprinkle flour over the beef and stir well. Pour in the beef broth and bring to a simmer. Stir in the mustard and sour cream, mixing well to create a creamy sauce. Season with salt and black pepper. Serve over cooked egg noodles and garnish with fresh parsley.',
            'difficulty' => 'Moderate',
            'diff_value' => 2,
            'cooking_time' => 35,
            'image_path' => 'images/Beef_Stroganoff.jpg'
        ]);
        
        Recipe::create([
            'name'=> 'Miso Ramen',
            'ingredients'=>'200g ramen noodles, 4 cups chicken broth, 2 tablespoons miso paste, 1 tablespoon soy sauce, 1 teaspoon sesame oil, 2 cloves garlic (minced), 1-inch ginger (grated), 100g sliced pork belly, 1 soft-boiled egg, 50g bean sprouts, 1 green onion (chopped), 1 sheet nori (seaweed), chili flakes (optional)',
            'description' => 'In a pot, heat sesame oil and sauté garlic and ginger. Add miso paste, soy sauce, and chicken broth. Simmer for 10 minutes. Cook ramen noodles separately according to the package instructions. In a pan, sear the sliced pork belly until crispy. Assemble the ramen bowl by adding cooked noodles, broth, pork belly, soft-boiled egg, bean sprouts, green onion, and nori. Sprinkle chili flakes if desired and serve hot.',
            'difficulty' => 'Moderate',
            'diff_value' => 2,
            'cooking_time' => 30,
            'image_path' => 'images/Miso_Ramen.jpg'
        ]);
        
        Recipe::create([
            'name'=> 'Vegetable Stir-Fry',
            'ingredients'=>'1 cup broccoli florets, 1 carrot (sliced), 1 bell pepper (sliced), 100g snap peas, 2 cloves garlic (minced), 1-inch ginger (grated), 2 tablespoons soy sauce, 1 teaspoon sesame oil, 1 tablespoon cornstarch, 1/2 cup vegetable broth, 1 tablespoon olive oil, sesame seeds (for garnish)',
            'description' => 'Heat olive oil in a pan and sauté garlic and ginger for 1 minute. Add the vegetables and stir-fry for 5 minutes. In a bowl, mix soy sauce, sesame oil, cornstarch, and vegetable broth. Pour the sauce over the vegetables and cook for another 2 minutes until thickened. Garnish with sesame seeds and serve with steamed rice or noodles.',
            'difficulty' => 'Easy',
            'diff_value' => 1,
            'cooking_time' => 20,
            'image_path' => 'images/Vegetable_Stir_Fry.jpg'
        ]);
        
        Recipe::create([
            'name'=> 'Shrimp Tacos',
            'ingredients'=>'300g shrimp (peeled and deveined), 1 teaspoon paprika, 1 teaspoon cumin, 1 teaspoon garlic powder, salt (to taste), black pepper (to taste), 2 tablespoons olive oil, 6 small tortillas, 1/2 cup shredded cabbage, 1/4 cup sour cream, 1 tablespoon lime juice, 1/2 avocado (sliced), fresh cilantro (for garnish)',
            'description' => 'Season shrimp with paprika, cumin, garlic powder, salt, and black pepper. Heat olive oil in a pan and cook shrimp for 2-3 minutes per side. Warm tortillas in a dry pan. Mix sour cream and lime juice to create a sauce. Assemble tacos with shrimp, shredded cabbage, avocado slices, and drizzle with lime sauce. Garnish with fresh cilantro and serve immediately.',
            'difficulty' => 'Easy',
            'diff_value' => 1,
            'cooking_time' => 25,
            'image_path' => 'images/Shrimp_Tacos.jpg'
        ]);
        
    }
}
