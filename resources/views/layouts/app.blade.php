<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>RecipeNest</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-50">
    <!-- Navigation Bar -->
    <nav class="bg-green-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{route('home')}}" class="text-white text-2xl font-bold">RecipeNest</a>
            <div class="flex space-x-4">
                <a href="{{route('favorites.show')}}" class="text-white hover:text-green-200">Favorites</a>
                @auth
                    <a href="{{route('profile.edit')}}" class="text-white hover:text-green-200"> {{Auth::user()->name}} </a>
                @else
                    <a href="{{route('login')}}" class="text-white hover:text-green-200">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        {{$slot}}
    </main>

    <script>
        const [entry] = performance.getEntriesByType("navigation");

        if (entry["type"] === "back_forward")
            location.reload();

        document.addEventListener('DOMContentLoaded', function () {
            const successMessage = "{{ session('success') }}";
            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: successMessage,
                    confirmButtonColor: '#10B981', 
                });
            }
        });
    </script>
    
</body>
</html>