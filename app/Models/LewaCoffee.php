<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LewaCoffee extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'nomor_hp', 'menu', 'jumlah_pesanan', 'alamat', 'pesan'];

}
