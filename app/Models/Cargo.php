<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'cargos';

    protected $fillable = [
        'id',
        'nome',
        'observacao'
    ];
}
