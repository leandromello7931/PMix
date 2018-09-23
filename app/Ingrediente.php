<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $fillable = [
        'id', 
        'nome', 
        'custo'
    ];

    protected $table = 'ingredientes';
}