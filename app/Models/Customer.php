<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use Notifiable;
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $fillable = ['nama_customer', 'email', 'password', 'alamat', 'no_telp'];
    protected $hidden = 'password';


    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'foreign_key', 'local_key');
    }
}
