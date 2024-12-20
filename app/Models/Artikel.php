<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $fillable = ['id_admin', 'judul', 'gambar', 'konten'];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_artikel', 'id_admin');
    }
}
