<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Login</title>
</head>

<body>
    <div class="min-h-screen bg-white flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-lg sm:rounded-lg sm:px-10">

                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-purple-600">
                        Machine Flow
                    </h2>
                    <p class="mt-2 text-sm sm:text-base text-gray-600">
                        Please sign in to your account
                    </p>
                </div>

                <!-- Form -->
                <form method="POST" action="/login" class="space-y-6">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="email">Email Address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="mt-1 block w-full px-3 py-2 sm:px-4 sm:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:outline-red-500"
                            required />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                        <div class="mt-1 relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="block w-full px-3 py-2 sm:px-4 sm:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 focus:outline-red-500"
                                required />
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-2 sm:space-y-0">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                id="remember"
                                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded" />
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-red-600 hover:text-red-700">Forgot password?</a>
                    </div>

                    <button
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 sm:py-3 border border-transparent rounded-lg shadow-sm text-sm sm:text-base font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Sign In
                    </button>
                </form>

                <p class="mt-6 text-center text-sm">
                    Don't have an account?
                    <a href="#" class="font-medium text-purple-600 hover:text-purple-700">Sign up now</a>
                </p>

            </div>
        </div>
    </div>
</body>

</html>