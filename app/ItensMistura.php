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

    public function ingredientes(){
        return $this->belongsToMany('App\Ingredientes', 'itens_mistura', 'id', 'id_ingrediente');
    }

    public function nutrientes()
    {
        return $this->belongsToMany('App\Nutrientes', 'itens_mistura', 'id', 'id_nutriente');
    }
    
    public function mistura(){
        return $this->belongsToMany('App\Mistura', 'itens_mistura', 'id', 'id_mistura');
    }
}
