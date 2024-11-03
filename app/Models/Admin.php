<?php

namespace App\Models;

use App\Models\Produsen;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "admin";
    protected $primaryKey = "id_admin";
    protected $fillable = ['username', 'password'];


    public function produk()
    {
        return $this->hasMany(Produk::class, 'foreign_key', 'local_key');
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'foreign_key', 'local_key');
    }

    public function faq()
    {
        return $this->hasMany(Faq::class, 'foreign_key', 'local_key');
    }
}
