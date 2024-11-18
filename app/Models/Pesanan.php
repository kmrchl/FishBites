<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $fillable = ['id_produk', 'id_customer', 'jumlah', 'total_harga', 'metode_pembayaran', 'bukti', 'status'];


    public function produk()
    {
        return $this->belongsToMany(Produk::class, 'pesanan_produk', 'id_pesanan', 'id_produk');
    }

    public function customer()
    {
        return $this->belongsTo(Admin::class, 'id_customer');
    }
}
