<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colecao extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'colecao';

    protected $fillable = [
        'id',
        'nome'
    ];
}
