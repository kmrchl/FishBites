<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Produsen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = ['id_admin', 'id_produsen', 'id_kategori', 'nama_produk', 'gambar', 'deskripsi', 'harga', 'stok'];

    public function produsen()
    {
        return $this->belongsTo(Produsen::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_produk', 'id_kategori');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class, 'pesanan_produk', 'id_produk', 'id_pesanan');
    }

    public function keranjang()
    {
        return $this->belongsToMany(Keranjang::class, 'keranjang_produk', 'id_produk', 'id_keranjang');
    }
}
