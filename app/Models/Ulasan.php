<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';
    protected $primaryKey = 'id_ulasan';
    protected $fillable = ['id_customer', 'id_produk', 'komentar'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
