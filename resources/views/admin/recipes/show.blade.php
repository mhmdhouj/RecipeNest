<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Recipes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 bg-green-700 text-white p-6 h-full">
            <h2 class="text-2xl font-semibold">Admin Panel</h2>
            <nav class="mt-6">
                <ul>
                    <li class="mb-3"><a href="{{ route('admin.dashboard') }}" class="hover:underline">Dashboard</a></li>
                </ul>
            </nav>
        </aside>

        <div class="flex-1 p-6 overflow-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">            
                @foreach ($recipes as $recipe)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ asset('storage/'.$recipe->image_path) }}" alt="Recipe Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-green-800">{{ $recipe->name }}</h2>
                            <form action="{{ route('admin.recipes.delete', $recipe) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 mt-4 rounded-lg bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Remove</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
