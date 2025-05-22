<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <div class="w-full max-w-sm bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-6">
            <h2 class="text-2xl font-semibold mb-6 text-center">Login</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                           class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                </div>
                
                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-1">Password</label>
                    <input id="password" type="password" name="password" required
                           class="w-full px-4 py-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                </div>
                
                <!-- Submit Button -->
                <div>
                    <button type="submit"
                            class="w-full py-2 px-4 bg-[#1b1b18] text-white rounded-lg hover:bg-[#333] transition duration-200">
                        Log In
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
