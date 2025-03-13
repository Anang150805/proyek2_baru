<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = session('cart', []); // Ambil data keranjang dari sesi
        return view('keranjang.index', compact('keranjang'));
    }
}
