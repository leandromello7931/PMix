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

    public function itensMistura(){
        return $this->hasMany(ItensMistura::class, 'id_mistura');
    }

    public function restricoesMistura(){
        return $this->hasMany(RestricoesMistura::class, 'id_mistura');
    }
}
