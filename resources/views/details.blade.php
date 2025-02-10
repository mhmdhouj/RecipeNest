<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{asset('storage/'.$recipe->image_path)}}" alt="{{$recipe->name}}" class="w-full h-96 object-cover">

            <div class="p-6">
                <h1 class="text-3xl font-bold text-green-800 mb-4">{{$recipe->name}}</h1>

                <div class="flex space-x-4 mb-6">
                    <p class="text-green-600">
                        <span class="font-semibold">Difficulty:</span> {{$recipe->difficulty}}
                    </p>
                    <p class="text-green-600">
                        <span class="font-semibold">Time:</span> {{$recipe->cooking_time . " mins"}}
                    </p>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-bold text-green-800 mb-2">Ingredients</h2>
                    <ul class="list-disc list-inside text-green-600">
                        @foreach (explode(',', $recipe->ingredients) as $ingredient)
                            <li>{{trim($ingredient)}}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-6">
                    <h2 class="text-xl font-bold text-green-800 mb-2">How to Make It</h2>
                    <p class="text-green-600 whitespace-pre-line">{{$recipe->description}}</p>
                </div>

                <div class="flex justify-center">
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
    </div>
</x-app-layout>