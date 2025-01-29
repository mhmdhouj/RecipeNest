<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeNest - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-50">
    <!-- Navigation Bar -->
    <nav class="bg-green-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{route('home')}}" class="text-white text-2xl font-bold">RecipeNest</a>
            <div class="flex space-x-4">
                <a href="#" class="text-white hover:text-green-200">Favorites</a>
                @if (Auth::check())
                    <a href="{{route('profile.edit')}}" class="text-white hover:text-green-200"> {{Auth::user()->name}} </a>
                @else
                    <a href="{{route('login')}}" class="text-white hover:text-green-200">Login</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Search Bar -->
    <div class="container mx-auto p-4">
        <form action="{{route('search')}}" method="GET" class="flex justify-center">
            @csrf
            <input type="text" name="search_input" placeholder="Search for recipes..." class="w-full max-w-md p-2 border border-green-300 rounded-l-lg focus:outline-none focus:border-green-500">
            <button type="submit" class="bg-green-600 text-white p-2 rounded-r-lg hover:bg-green-700">Search</button>
        </form>
    </div>

    <!-- Recipe List -->
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">            
            @foreach ($recipes as $recipe)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{asset('storage/'.$recipe->image_path)}}" alt="Recipe Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-green-800"> {{$recipe->name}} </h2>
                        <p class="text-green-600"> {{'Difficulty: ' . $recipe->difficulty}} </p>
                        <p class="text-green-600"> {{'Time: ' . $recipe->cooking_time}} </p>
                        <div class="mt-4 flex justify-between items-center">
                            <a href="#" class="text-green-600 hover:text-green-800">View Details</a>
                            <button class="bg-green-600 text-white p-2 rounded-lg hover:bg-green-700">Add to Favorites</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    {{$recipes->links()}}
</body>
</html>