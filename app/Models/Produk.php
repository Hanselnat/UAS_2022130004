<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama_produk',
        'merk',
        'kategoris_id',
        'tipe',
        'harga',
        'photo',
        'stok',
    ];
    public function getTotalHargaAttribute()
    {
        $kategoris_id = $this->photo ? $this->photo->harga : 0;
        $harga = $this->harga ?? 0;

        return $kategoris_id + $harga;
    }
}