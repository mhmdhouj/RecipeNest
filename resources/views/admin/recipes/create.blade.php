<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Add Recipe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 bg-green-700 text-white p-6 fixed left-0 top-0 bottom-0">
            <h2 class="text-2xl font-semibold">Admin Panel</h2>
            <nav class="mt-6">
                <ul>
                    <li class="mb-3"><a href="{{route('admin.dashboard')}}" class="hover:underline">Dashboard</a></li>
                </ul>
            </nav>
        </aside>

        <div class="flex-1 p-8">
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-green-700 mb-6">Add New Recipe</h2>
                <form method="POST" action="{{ route('admin.recipes.store') }}" class="space-y-6" enctype="multipart/form-data">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-green-700 font-semibold">Recipe Name</label>
                        <input id="name" type="text" name="name" class="w-full mt-1 p-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500" required autofocus>
                    </div>
                    
                    <div>
                        <label for="ingredients" class="block text-green-700 font-semibold">Ingredients</label>
                        <textarea id="ingredients" name="ingredients" class="w-full mt-1 p-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500" rows="4" required></textarea>
                    </div>
                    
                    <div>
                        <label for="description" class="block text-green-700 font-semibold">Description</label>
                        <textarea id="description" name="description" class="w-full mt-1 p-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500" rows="4" required></textarea>
                    </div>
                    
                    <div>
                        <label for="difficulty" class="block text-green-700 font-semibold">Difficulty</label>
                        <select id="difficulty" name="difficulty" class="w-full mt-1 p-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                            <option value="Easy">Easy</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Hard">Hard</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="image" class="block text-green-700 font-semibold">Recipe Image</label>
                        <input id="image" type="file" name="image" class="w-full mt-1 p-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                    </div>
                    
                    <div>
                        <label for="cooking_time" class="block text-green-700 font-semibold">Cooking Time (mins)</label>
                        <input id="cooking_time" type="number" name="cooking_time" class="w-full mt-1 p-2 border border-green-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700">Add Recipe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
