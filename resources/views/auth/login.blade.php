<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Custom styles for the layout */
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="container max-w-md">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            
    
            <!-- Card Header -->
            <div class="bg-white pt-6 pb-4 px-6 border-b border-gray-100"> 
                <h1 class="text-xl md:text-2xl font-bold text-gray-800 text-center">Login</h1>
            </div>
            
            <!-- Card Body -->
            <div class="pt-4 md:pt-6 px-6 md:px-8 pb-6">
                @if (session('error'))
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Email Address -->
                    <div class="space-y-2">
                        <label for="email" class="block text-gray-800 font-semibold">Email Address</label>
                        <input id="email" type="email" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                            name="email" value="{{ old('email') }}" 
                            placeholder="your.email@example.com"
                            required autocomplete="email" autofocus>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Password -->
                    <div class="space-y-2">
                        <label for="password" class="block text-gray-800 font-semibold">Password</label>
                        <div class="relative">
                            <input id="password" type="password" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                                name="password" placeholder="Enter your password" required autocomplete="current-password">
                            <button type="button" onclick="togglePasswordVisibility()" 
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" id="password-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" 
                            class="h-4 w-4 text-gray-600 border-gray-300 rounded focus:ring-gray-500"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Remember Me
                        </label>
                    </div>
                    
                    <!-- Login Button -->
                    <div>
                        <button type="submit" class="w-full px-6 py-3 bg-gray-800 text-white rounded-full font-medium text-sm hover:bg-gray-700 transition-colors duration-300 flex justify-center items-center">
                            Login
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Card Footer -->
            <div class="bg-gray-50 py-4 px-6 text-center border-t border-gray-100">
                <p class="text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-gray-800 font-medium hover:underline">
                        Register here
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const passwordEye = document.getElementById('password-eye');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordEye.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                `;
            } else {
                passwordInput.type = 'password';
                passwordEye.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            }
        }
    </script>
</body>
</html>