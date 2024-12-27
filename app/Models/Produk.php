<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table ='produk';
    protected $primarykey ='id';
    protected $guarded ='id';
    protected $attributes = [
        'judul',
        'deskripsi',
        'gambar',
        'harga',
        'stok'
    ]; 
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'harga',
        'stok'
    ]; 
}
