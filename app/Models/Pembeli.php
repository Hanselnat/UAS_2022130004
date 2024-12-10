<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = [
        'nama_pembeli',
        'jenis_pembeli',
        'kontak',
        'alamat',
    ];
}
