<?php

namespace App\Models;

use App\Models\Produsen;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id_admin";
    

    public function produk()
    {
        return $this->hasMany(Produk::class, 'foreign_key', 'local_key');
    }
}
