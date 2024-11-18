<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produsen extends Model
{
    protected $table = "produsen";
    protected $primaryKey = 'id_produsen';
    protected $fillable = ['nama_produsen', 'lokasi'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'foreign_key', 'local_key');
    }
}
