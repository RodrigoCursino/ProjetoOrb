<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnidadeMedida extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'unidade_medida';

    protected $fillable = [
        'id',
        'legenda',
        'descricao'
    ];
}
