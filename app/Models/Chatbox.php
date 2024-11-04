<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbox extends Model
{
    use HasFactory;
    protected $table = 'chatbox';
    protected $primarykey = 'id_pesan';
    protected $fillable = ['id_customer', 'id_admin', 'pesan'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}
