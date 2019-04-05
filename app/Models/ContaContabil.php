<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContaContabil extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'conta_contabeis';

    protected $fillable = [
        'id',
        'nome',
        'cod_contabilidade'
    ];
}
