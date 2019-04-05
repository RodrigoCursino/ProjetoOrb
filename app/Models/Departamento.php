<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'departamento';

    protected $fillable = [
        'id',
        'nome',
        'descricao'
    ];
}
