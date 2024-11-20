<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable, HasApiTokens, HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $fillable = ['nama_customer', 'email', 'password', 'alamat', 'no_telp'];
    protected $hidden = ['password'];
    public $incrementing = true;


    public function tokens()
    {
        return $this->morphMany(PersonalAccessToken::class, 'tokenable', 'tokenable_type', 'tokenable_id', 'id_customer');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'foreign_key', 'local_key');
    }

    public function chat()
    {
        return $this->hasMany(Chatbox::class, 'foreign_key', 'local_key');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'keranjang_produk', 'id_customer', 'id_keranjang');
    }
}
