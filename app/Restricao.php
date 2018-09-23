<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restricao extends Model
{
    protected $fillable = [
        'id', 
        'nome'
    ];

    protected $table = 'restricoes';
}
