<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = [
        'nama_jurusan',
        'gambar_jurusan',
        'deskripsi',
        'visi',
        'misi',
        'slug_jurusan'
    ];
}
