<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marca extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'marca';

    protected $fillable = [
        'id',
        'nome'
    ];

    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class);
    }
}
