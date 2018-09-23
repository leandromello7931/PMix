<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutriente extends Model
{
    protected $fillable = [
        'id', 
        'nome'
    ];

    protected $table = 'nutrientes';
}
