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

    public function itens_mistura(){
            return $this->hasMany('App\ItemMistura', 'id_ingrediente', 'id');
    }
    
}