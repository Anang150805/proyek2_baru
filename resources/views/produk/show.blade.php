@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-3xl mx-auto bg-white p-6 shadow-md rounded-lg">
        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-80 object-cover rounded-lg">
        <h1 class="text-2xl font-bold mt-4">{{ $produk->nama }}</h1>
        <p class="text-gray-600 mt-2">{{ $produk->deskripsi }}</p>
        <p class="text-purple-700 font-bold text-xl mt-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
        <a href="{{ route('produk.index') }}" class="inline-block mt-4 text-purple-600 hover:underline">Kembali ke daftar produk</a>
    </div>
</div>
@endsection
