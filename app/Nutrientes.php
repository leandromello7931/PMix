<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrientes extends Model
{
    protected $fillable = [
        'id', 
        'nome'
    ];

    protected $table = 'nutrientes';
}
