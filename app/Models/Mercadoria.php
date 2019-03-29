<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mercadoria extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'mercadorias';

    protected $fillable = [
       'nome',
       'ncm',
       'unidade_medida',
       'unidade_caixa',
       'observacao'
    ];
}
