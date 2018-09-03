<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mistura extends Model
{
    protected $fillable = ['ingredientes_id', 'nutrientes_id', 'qtd_nutriente', 'custo_nutriente'];

    protected $table = 'misturas';
}
