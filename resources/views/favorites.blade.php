<x-app-layout>
    
    @if ($favorites->isEmpty())
        <div class="container mx-auto p-4 min-h-screen flex items-center justify-center">
            <h2 class="text-2xl font-bold text-green-800 mb-4">No Favorite Recipes</h2>
        </div>
    @else
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">            
                @foreach ($favorites as $favorite)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{asset('storage/'.$favorite->image_path)}}" alt="Recipe Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-green-800"> {{$favorite->name}} </h2>
                            <p class="text-green-600"> <span class="font-semibold">Difficulty:</span> {{$favorite->difficulty}} </p>
                            <p class="text-green-600"> <span class="font-semibold">Time:</span> {{$favorite->cooking_time}} </p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="{{route('details', $favorite)}}" class="text-green-600 hover:text-green-800">View Details</a>
                                <form action="{{route('favorites.remove', $favorite)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 rounded-lg transition-colors duration-200 bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    
</x-app-layout>