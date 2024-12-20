<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kiye | Profile</title>
</head>

<body>
    @include('client.dashboard.navbar')

    <main class="bg-white mt-16">
        <div class="container mx-auto p-6">
            <div class="flex justify-center items-center mb-10">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full sm:w-2/3 lg:w-1/2">
                    <!-- Profile Picture -->
                    <div class="flex justify-center mb-6">
                        <!-- Use a placeholder image or the user's avatar if available -->
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-full border-4 border-gray-200 w-32 h-32 object-cover">
                    </div>

                    <!-- User Information -->
                    <div class="text-center">
                        <h2 class="text-xl font-medium mb-2">{{ $user->name }}</h2>
                        <p class="text-gray-600">{{ $user->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Edit Profile Form -->
            <div class="flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-md w-full sm:w-2/3 lg:w-1/2">
                    <h2 class="text-2xl font-medium mb-6 text-center">Edit Profile</h2>

                    <form action="#" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ $user->name }}" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" id="email" name="email" value="{{ $user->email }}" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700">New Password (optional)</label>
                            <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
