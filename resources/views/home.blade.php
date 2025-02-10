<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center gap-4">
            <form action="{{ route('search') }}" method="GET" class="flex flex-grow">
                @csrf
                <input type="text" name="search_input" placeholder="Search for recipes..." class="w-full max-w-md p-2 border border-green-300 rounded-l-lg focus:outline-none focus:border-green-500">
                <button type="submit" class="bg-green-600 text-white p-2 rounded-r-lg hover:bg-green-700">Search</button>
            </form>

            <form method="GET" action="{{ route('home') }}">
                <select name="sort" onchange="this.form.submit()" class="border border-green-300 p-2 rounded-lg focus:outline-none focus:border-green-500">
                    <option value="">Sort by</option>
                    <option value="time_asc" {{ request('sort') == 'time_asc' ? 'selected' : '' }}>Time (Low to High)</option>
                    <option value="time_desc" {{ request('sort') == 'time_desc' ? 'selected' : '' }}>Time (High to Low)</option>
                    <option value="difficulty_asc" {{ request('sort') == 'difficulty_asc' ? 'selected' : '' }}>Difficulty (Easy to Hard)</option>
                    <option value="difficulty_desc" {{ request('sort') == 'difficulty_desc' ? 'selected' : '' }}>Difficulty (Hard to Easy)</option>
                </select>
            </form>
        </div>
    </div>

    @if ($recipes->isEmpty())
    <div class="container mx-auto p-4 min-h-screen flex items-center justify-center">
        <h2 class="text-2xl font-bold text-green-800 mb-4">No Recipes found</h2>
    </div>
    @else
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">            
                @foreach ($recipes as $recipe)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{asset('storage/'.$recipe->image_path)}}" alt="Recipe Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-green-800"> {{$recipe->name}} </h2>
                            <p class="text-green-600"> <span class="font-semibold">Difficulty:</span> {{$recipe->difficulty}} </p>
                            <p class="text-green-600"> <span class="font-semibold">Time:</span> {{$recipe->cooking_time . " mins"}} </p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="{{route('details', $recipe)}}" class="text-green-600 hover:text-green-800">View Details</a>
                                @if ($favorites->contains($recipe))
                                    <form action="{{route('favorites.remove', $recipe)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 rounded-lg transition-colors duration-200 bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Remove</button>
                                    </form>
                                @else
                                    <form action="{{route('favorites.add', $recipe)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-green-600 text-white p-2 rounded-lg hover:bg-green-700">Add to Favorites</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    
</x-app-layout>