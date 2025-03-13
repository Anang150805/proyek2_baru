@extends('layouts.app')

@section('title', 'Beranda - Baby Gemez')

@section('content')
<div class="bg-purple-100 min-h-screen py-12"> <!-- Background Ungu -->
    <div class="container mx-auto">
        
        <!-- Banner -->
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner rounded-lg shadow-lg">
                <div class="carousel-item active">
                    <img src="{{ asset('images/baner.png') }}" class="d-block w-100 h-[400px] object-cover" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner food.jpg') }}" class="d-block w-100 h-[400px] object-cover" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner foodd.jpg') }}" class="d-block w-100 h-[400px] object-cover" alt="Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Kategori Produk -->
        <div class="text-center mt-12">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Kategori</h2>
            <div class="flex justify-center gap-6">
                @php
                    $categories = [
                        ['image' => 'bubur.png', 'name' => 'Bubur Bayi'],
                        ['image' => 'sop.png', 'name' => 'Sop Bayi'],
                        ['image' => 'pudding.png', 'name' => 'Pudding Bayi']
                    ];
                @endphp

                @foreach ($categories as $category)
                    <div class="bg-white p-5 shadow-lg rounded-lg text-center w-44 transition duration-300 transform hover:scale-110">
                        <img src="{{ asset('images/' . $category['image']) }}" alt="{{ $category['name'] }}" class="w-full h-28 object-cover rounded-lg mb-3">
                        <p class="font-semibold text-gray-700">{{ $category['name'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Produk Unggulan -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Produk Unggulan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @php
                    $products = [
                        ['image' => 'bubur2.jpeg', 'name' => 'Bubur Wortel', 'price' => 'Rp 3.000'],
                        ['image' => 'pudding1.jpg', 'name' => 'Bubur Enak', 'price' => 'Rp 3.000'],
                        ['image' => 'pudding 2.jpg', 'name' => 'Pudding Coklat', 'price' => 'Rp 2.000'],
                        ['image' => 'sop 1.jpg', 'name' => 'Sop Kih', 'price' => 'Rp 2.000']
                    ];
                @endphp

                @foreach ($products as $product)
                    <div class="bg-white p-5 shadow-lg rounded-lg text-center transition duration-300 transform hover:scale-110">
                        <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full rounded-lg">
                        <h3 class="font-bold mt-3 text-gray-800">{{ $product['name'] }}</h3>
                        <p class="text-blue-600 font-semibold">{{ $product['price'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="bg-purple-700 text-white py-10 mt-12">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-wrap justify-between items-center text-center md:text-left gap-8">
            <!-- Tentang Kami -->
            <div class="w-full md:w-1/3">
                <h3 class="text-lg font-semibold">Tentang Baby Gemez</h3>
                <p class="text-sm mt-2">Makanan sehat dan berkualitas untuk si kecil dengan bahan alami dan bergizi.</p>
            </div>
            
            <!-- Navigasi -->
            <div class="w-full md:w-1/3">
                <h3 class="text-lg font-semibold">Navigasi</h3>
                <ul class="mt-2 space-y-1">
                    <li><a href="#" class="text-sm hover:underline">Beranda</a></li>
                    <li><a href="#" class="text-sm hover:underline">Produk</a></li>
                    <li><a href="#" class="text-sm hover:underline">Kontak</a></li>
                    <li><a href="#" class="text-sm hover:underline">Tentang Kami</a></li>
                </ul>
            </div>

            <!-- Media Sosial -->
            <div class="w-full md:w-1/3">
                <h3 class="text-lg font-semibold">Ikuti Kami</h3>
                <div class="flex justify-center md:justify-start gap-4 mt-3">
                    <a href="#" class="text-white text-2xl hover:text-gray-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-white text-2xl hover:text-gray-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-white text-2xl hover:text-gray-300">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        
        <!-- Copyright -->
        <div class="mt-8 border-t border-gray-400 pt-4 text-center">
            <p class="text-sm">&copy; 2025 Baby Gemez. All Rights Reserved.</p>
        </div>
    </div>
</footer>


<!-- Font Awesome (untuk ikon media sosial) -->
<script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>
@endsection
