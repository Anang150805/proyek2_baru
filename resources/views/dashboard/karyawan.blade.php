@extends('layouts.app')

@section('title', 'Dashboard Karyawan')

@section('content')
<div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold text-white mb-6">Dashboard Karyawan</h2>

    <div class="grid grid-cols-2 gap-6">
        <!-- Kelola Produk -->
        <div class="bg-white/10 p-6 rounded-lg border border-white/20 text-white">
            <h3 class="text-lg font-bold">Kelola Produk</h3>
            <p>{{ $jumlah_produk }} Produk</p>
            <a href="{{ route('karyawan.produk') }}" class="mt-3 inline-block bg-green-500 px-4 py-2 rounded-lg">Lihat</a>
        </div>

        <!-- Kelola Pesanan -->
        <div class="bg-white/10 p-6 rounded-lg border border-white/20 text-white">
            <h3 class="text-lg font-bold">Kelola Pesanan</h3>
            <p>{{ $jumlah_pesanan }} Pesanan</p>
            <a href="{{ route('karyawan.pesanan') }}" class="mt-3 inline-block bg-yellow-500 px-4 py-2 rounded-lg">Lihat</a>
        </div>
    </div>
</div>
@endsection
