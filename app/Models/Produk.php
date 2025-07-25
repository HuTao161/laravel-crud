<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Tentukan kolom mana yang bisa diisi
    protected $fillable = ['nama', 'deskripsi', 'harga', 'stok'];
}
