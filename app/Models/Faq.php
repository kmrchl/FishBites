<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq';
    protected $primaryKey = 'id_faq';
    protected $fillable = ['id_admin', 'pertanyaan', 'jawaban'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
