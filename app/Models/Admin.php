<?php

namespace App\Models;

use App\Models\Produsen;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;
    protected $table = "admin";
    protected $primaryKey = "id_admin";
    protected $fillable = ['username', 'password'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

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

    public function chat()
    {
        return $this->hasMany(Chatbox::class, 'foreign_key', 'local_key');
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
