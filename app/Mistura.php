<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mistura extends Model
{
    protected $fillable = [
        'id', 
        'nome'
    ];

    protected $table = 'misturas';

}
