<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table ='banner';
    protected $primarykey ='id';
    protected $guarded ='id';

    protected $fillable = [
        'judul',
        'descripsi',
        'gambar'
    ];
}
