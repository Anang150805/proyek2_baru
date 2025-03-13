@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold text-purple-700 mb-4">Tentang Kami</h1>
    
    <p class="text-gray-700 mb-6">
        Baby Gemez adalah perusahaan yang menyediakan produk bayi berkualitas tinggi untuk memenuhi kebutuhan si kecil. Kami berkomitmen untuk memberikan produk terbaik dengan harga yang terjangkau.
    </p>

    <!-- Kandungan Gizi -->
    <h2 class="text-xl font-bold text-purple-700 mb-3">Kandungan Gizi Produk Baby Gemez</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Bubur -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-purple-600">Bubur</h3>
            <p class="text-gray-700 mt-2">
                Mengandung karbohidrat, protein, serat, dan vitamin yang membantu pertumbuhan bayi.
            </p>
            <ul class="list-disc pl-5 mt-2 text-gray-700">
                <li>Karbohidrat: 20g</li>
                <li>Protein: 5g</li>
                <li>Serat: 3g</li>
                <li>Vitamin A, C, D, dan K</li>
            </ul>
        </div>

        <!-- Puding -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-purple-600">Puding</h3>
            <p class="text-gray-700 mt-2">
                Sumber kalsium dan vitamin untuk kesehatan tulang serta pencernaan bayi.
            </p>
            <ul class="list-disc pl-5 mt-2 text-gray-700">
                <li>Kalsium: 150mg</li>
                <li>Vitamin D: 20 IU</li>
                <li>Serat: 2g</li>
                <li>Antioksidan alami</li>
            </ul>
        </div>

        <!-- Sop -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-purple-600">Sop</h3>
            <p class="text-gray-700 mt-2">
                Kaya akan protein, zat besi, dan mineral untuk mendukung sistem imun bayi.
            </p>
            <ul class="list-disc pl-5 mt-2 text-gray-700">
                <li>Protein: 6g</li>
                <li>Zat Besi: 2mg</li>
                <li>Vitamin B12 dan B6</li>
                <li>Omega-3 untuk perkembangan otak</li>
            </ul>
        </div>
    </div>

    <!-- Informasi Cabang -->
    <h2 class="text-xl font-bold text-purple-700 mt-6 mb-3">Cabang Baby Gemez</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Cabang Lohbener -->
        <div class="border p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/outlet1.jpg') }}" alt="Outlet Jakarta" class="w-full h-40 object-cover rounded-md">
            <h3 class="text-lg font-semibold text-purple-600 mt-3">pamayahan</h3>
            <p class="text-gray-700">Jl. pamayahan No. 123</p>
        </div>

        <!-- Cabang Bandung -->
        <div class="border p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/outlet2.jpg') }}" alt="Outlet B" class="w-full h-40 object-cover rounded-md">
            <h3 class="text-lg font-semibold text-purple-600 mt-3">celeng</h3>
            <p class="text-gray-700">Jl. celeng No. 45</p>
        </div>

        <!-- Cabang Surabaya -->
        <div class="border p-4 rounded-lg shadow-md">
            <img src="{{ asset('images/outlet3.jpg') }}" alt="Outlet Surabaya" class="w-full h-40 object-cover rounded-md">
            <h3 class="text-lg font-semibold text-purple-600 mt-3">bangkir</h3>
            <p class="text-gray-700">Jl. bangkir. 78</p>
        </div>
    </div>
</div>
@endsection
