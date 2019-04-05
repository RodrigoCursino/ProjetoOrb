<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linha extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'linha';

    protected $fillable = [
        'id',
        'nome'
    ];
}
