<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans'; // Nama tabel di database
    protected $fillable = [
        'id_user',
        'id_produk',
        'jumlah',
        'subtotal',
        'status', // Status pesanan: menunggu, diproses, selesai
    ];

    // Relasi dengan User (satu user bisa memiliki banyak pesanan)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan Produk (satu pesanan hanya memiliki satu produk)
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
