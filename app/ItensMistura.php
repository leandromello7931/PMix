<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensMistura extends Model
{
    protected $fillable = [
        'id', 
        'id_mistura', 
        'id_ingrediente', 
        'id_nutriente', 
        'valor_ingredxnutr'
    ];

    protected $table = 'itens_mistura';
}
