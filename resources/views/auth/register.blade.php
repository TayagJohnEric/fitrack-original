<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
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
                <h1 class="text-xl md:text-2xl font-bold text-gray-800 text-center">Register</h1>
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

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf
                    
                    <!-- Username -->
                    <div class="space-y-2">
                        <label for="name" class="block text-gray-800 font-semibold">Username</label>
                        <input id="name" type="text" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                            name="name" value="{{ old('name') }}" 
                            placeholder="Choose a username"
                            required autocomplete="name" autofocus>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Email Address -->
                    <div class="space-y-2">
                        <label for="email" class="block text-gray-800 font-semibold">Email Address</label>
                        <input id="email" type="email" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                            name="email" value="{{ old('email') }}" 
                            placeholder="your.email@example.com"
                            required autocomplete="email">
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
                                name="password" placeholder="Create a password" required autocomplete="new-password">
                            <button type="button" onclick="togglePasswordVisibility('password', 'password-eye')" 
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
                    
                    <!-- Confirm Password -->
                    <div class="space-y-2">
                        <label for="password-confirm" class="block text-gray-800 font-semibold">Confirm Password</label>
                        <div class="relative">
                            <input id="password-confirm" type="password" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                                name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">
                            <button type="button" onclick="togglePasswordVisibility('password-confirm', 'confirm-password-eye')" 
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" id="confirm-password-eye" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Register Button -->
                    <div>
                        <button type="submit" class="w-full px-6 py-3 bg-gray-800 text-white rounded-full font-medium text-sm hover:bg-gray-700 transition-colors duration-300 flex justify-center items-center">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Card Footer -->
            <div class="bg-gray-50 py-4 px-6 text-center border-t border-gray-100">
                <p class="text-gray-600">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-gray-800 font-medium hover:underline">
                        Login here
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId, eyeId) {
            const passwordInput = document.getElementById(inputId);
            const passwordEye = document.getElementById(eyeId);
            
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