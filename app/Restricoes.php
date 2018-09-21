<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restricoes extends Model
{
    protected $fillable = [
        'id', 
        'nome'
    ];

    protected $table = 'restricoes';
}
