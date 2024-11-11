<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-blue-50 rounded-lg shadow-lg p-8 w-full max-w-md">
        <h2 class="text-center text-2xl font-semibold text-gray-800 mb-8">Sign In</h2>

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Username Input -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-2">Username</label>
                <input type="text" id="username" name="email" value="{{ old('email') }}"
                    class="block w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    required>
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="block w-full px-4 py-2 rounded-lg bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    required>
            </div>

            <!-- Sign In Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                Sign In
            </button>
        </form>

    </div>
</body>

</html>