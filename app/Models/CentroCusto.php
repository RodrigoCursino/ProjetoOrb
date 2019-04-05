<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CentroCusto extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'centro_custo';

    protected $fillable = [
        'id',
        'nome'
    ];
}
