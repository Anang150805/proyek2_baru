@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h2 class="text-3xl font-extrabold text-purple-800 mb-8 text-center">Produk Kami</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($produk as $item)
            <div class="bg-white p-4 shadow-lg rounded-lg transform transition duration-300 hover:scale-105">
                <!-- Gambar Produk -->
                <div class="relative">
                    <img src="{{ asset('images/' . $item->gambar) }}" 
                        alt="{{ $item->nama }}" 
                        class="w-full h-64 object-cover rounded-lg">
                    <span class="absolute top-2 right-2 bg-purple-600 text-white text-xs px-3 py-1 rounded-full shadow-md">
                        Stok: {{ $item->stok }}
                    </span>
                </div>

                <!-- Nama & Deskripsi -->
                <h3 class="text-lg font-semibold mt-3 text-gray-800">{{ $item->nama }}</h3>
                <p class="text-gray-500 text-sm">{{ Str::limit($item->deskripsi, 90) }}</p>

                <!-- Harga -->
                <p class="text-xl font-bold text-purple-700 mt-2">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>

                <!-- Tombol Aksi -->
                <div class="flex flex-col gap-2 mt-4">
                    <a href="{{ route('produk.show', $item->id) }}" 
                        class="block text-center bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-500 transition">
                        Lihat Detail
                    </a>
                    <a href="#" 
                        class="block text-center border-2 border-purple-600 text-purple-600 py-2 rounded-lg hover:bg-purple-600 hover:text-white transition">
                        Tambah ke Keranjang
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
