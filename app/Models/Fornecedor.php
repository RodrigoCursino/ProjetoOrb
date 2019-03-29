<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id',
        'nome_fantasia',
        'razao_social',
        'cnpj',
        'ie',
        'observacao',
        'forn_mercadoria'
    ];
}
