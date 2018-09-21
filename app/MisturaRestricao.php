<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MisturaRestricao extends Model
{
    protected $fillable = [
        'id_mistura', 
        'id_nutriente', 
        'id_restricao',
        'valor_restricao'
    ];

    protected $table = 'misturas_restricoes';
}
