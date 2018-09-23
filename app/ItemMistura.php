<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Ingrediente;

class ItemMistura extends Model
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
        return $this->belongsTo('App\Ingrediente', 'id_ingrediente');
    }

    public function nutrientes(){
        return $this->belongsTo('App\Nutriente', 'id_nutriente');
    }

    public function restricoes(){
        return $this->belongsTo('App\Restricao', 'id_restricao');
    }

}
