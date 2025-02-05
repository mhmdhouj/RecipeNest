<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="text-white bg-green-600 hover:bg-green-700 px-4 py-2 rounded-md">
                {{ __('Logout') }}
            </button>
        </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as an admin!") }}

                    <div class="mt-6">
                        <a href="{{ route('admin.recipes.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                            {{ __('Add New Recipe') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>