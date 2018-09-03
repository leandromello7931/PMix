<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    protected $fillable = ['id', 'nome'];

    protected $table = 'ingredientes';
}