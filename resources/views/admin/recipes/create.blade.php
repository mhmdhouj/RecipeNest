<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600 leading-tight">
            {{ __('Add New Recipe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.recipes.store') }}" class="space-y-6" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Recipe Name')" class="text-green-600" />
                            <x-text-input id="name" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" type="text" name="name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Ingredients -->
                        <div>
                            <x-input-label for="ingredients" :value="__('Ingredients')" class="text-green-600" />
                            <textarea id="ingredients" name="ingredients" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500 rounded-md shadow-sm" rows="4" required></textarea>
                            <x-input-error :messages="$errors->get('ingredients')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Description -->
                        <div>
                            <x-input-label for="description" :value="__('Description')" class="text-green-600" />
                            <textarea id="description" name="description" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500 rounded-md shadow-sm" rows="4" required></textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Difficulty -->
                        <div>
                            <x-input-label for="difficulty" :value="__('Difficulty')" class="text-green-600" />
                            <select id="difficulty" name="difficulty" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500 rounded-md shadow-sm" required>
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                            <x-input-error :messages="$errors->get('difficulty')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Image Upload -->
                        <div>
                            <x-input-label for="image" :value="__('Recipe Image')" class="text-green-600" />
                            <input id="image" type="file" name="image" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500 rounded-md shadow-sm" required />
                            <x-input-error :messages="$errors->get('image')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Cooking Time -->
                        <div>
                            <x-input-label for="cooking_time" :value="__('Cooking Time')" class="text-green-600" />
                            <x-text-input id="cooking_time" class="block mt-1 w-full border-green-500 focus:ring-green-500 focus:border-green-500" type="text" name="cooking_time" required />
                            <x-input-error :messages="$errors->get('cooking_time')" class="mt-2 text-red-500" />
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end">
                            <x-primary-button class="bg-green-600 hover:bg-green-700 text-white">
                                {{ __('Add Recipe') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>