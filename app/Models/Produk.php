<?php

namespace App\Models;

use App\Models\Produsen;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';

    public function produsen()
    {
        return $this->belongsTo(Produsen::class);
    }
}
