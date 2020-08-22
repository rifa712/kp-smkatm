<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hymne extends Model
{
    protected $fillable = [
        'judul',
        'lirik'
    ];
}
