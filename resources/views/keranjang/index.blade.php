@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Keranjang Belanja</h2>

        @if (empty($keranjang))
            <p class="text-gray-500">Keranjang belanja kamu kosong.</p>
        @else
            <ul>
                @foreach ($keranjang as $item)
                    <li class="border-b py-2">{{ $item['nama'] }} - {{ $item['jumlah'] }} pcs</li>
                @endforeach
            </ul>
        @endif

        <a href="{{ route('produk.index') }}" class="mt-4 inline-block bg-purple-700 text-white px-4 py-2 rounded-md">
            Lanjut Belanja
        </a>
    </div>
@endsection
