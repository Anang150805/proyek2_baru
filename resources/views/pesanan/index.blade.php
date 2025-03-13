@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Pesanan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Status</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->status }}</td>
                <td>{{ $p->total_harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
