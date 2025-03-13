@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<h2>Dashboard Admin</h2>
<p>Selamat datang, {{ auth()->user()->name }}!</p>
<a href="{{ route('produk.index') }}" class="btn btn-primary">Kelola Produk</a>
<a href="{{ route('laporan.index') }}" class="btn btn-success">Laporan Keuangan</a>
@endsection
