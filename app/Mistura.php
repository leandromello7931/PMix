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

    public function comments()
    {
        return $this->hasMany('App\ItensMistura', 'id_mistura', 'id');
    }

}
