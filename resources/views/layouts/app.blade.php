<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Baby Gemez') }}</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div id="app">
        <!-- Navbar -->
        <nav class="bg-purple-700 p-4 shadow-md">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo Kiri -->
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Baby Gemez Logo" class="h-10">
                    <span class="text-white text-xl font-bold">Baby Gemez</span>
                </a>

                <!-- Menu Tengah -->
                <ul class="flex space-x-6 text-white items-center">
                    <li><a href="{{ url('home') }}" class="hover:underline">Beranda</a></li>
                    <li><a href="{{ route('produk.index') }}" class="hover:underline">Produk</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:underline">Tentang Kami</a></li>

                </ul>

                <!-- Ikon Keranjang & Dropdown Logout -->
                <div class="flex items-center space-x-6">
                    <!-- Ikon Keranjang -->
                    <div class="relative">
                        <a href="{{ route('keranjang.index') }}" class="text-white relative">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-2 py-0.5 rounded-full">
                                {{ session('cart') ? count(session('cart')) : 0 }}
                            </span>
                        </a>
                    </div>

                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-white hover:underline">Login</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white hover:underline">Register</a>
                        @endif
                    @else
                        <!-- Dropdown Logout di Pojok Kanan -->
                        <div class="relative">
                            <a href="#" class="text-white hover:underline" id="userDropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <div id="dropdown-menu" class="absolute right-0 hidden bg-white text-black shadow-md rounded-md mt-2 w-40">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </nav>

        <!-- Content -->
        <main class="container mx-auto py-10 px-6">
            @yield('content')
        </main>

    </div>
    <script>
        document.getElementById("userDropdown").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("dropdown-menu").classList.toggle("hidden");
        });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
