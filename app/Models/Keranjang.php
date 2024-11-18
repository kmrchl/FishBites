<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $fillable = ['id_produk', 'id_customer', 'jumlah'];
    protected $primaryKey = 'id_keranjang';


    function produk()
    {
        return $this->belongsToMany(Produk::class, 'keranjang_produk', 'id_keranjang', 'id_produk');
    }

    function cust()
    {
        return $this->belongsTo(Customer::class, 'keranjang_produk', 'id_keranjang', 'id_customer');
    }
}
