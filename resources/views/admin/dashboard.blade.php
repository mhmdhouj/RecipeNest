<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-green-700 text-white p-6 space-y-6">
            <h2 class="text-2xl font-bold">Admin Dashboard</h2>
            
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full text-center bg-red-500 px-4 py-2 rounded hover:bg-red-600">Logout</button>
            </form>
        </aside>
        
        <main class="flex-1 p-10">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-green-700">Welcome, Admin!</h2>
                <div class="mt-6 flex flex-col space-y-4">
                    <a href="{{ route('admin.recipes.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 w-48 text-center">
                        {{ __('Add New Recipe') }}
                    </a>
                    <a href="{{ route('admin.recipes.show') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 w-48 text-center">
                        {{ __('Delete Recipe') }}
                    </a>
                </div>
            </div>
        </main>            
    </div>

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
