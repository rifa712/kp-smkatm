<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sambutan extends Model
{
    protected $fillable = [
        'foto_sambutan',
        'isi_sambutan'
    ];
}
