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
       'id',
       'nome',
       'observacao'
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function linha()
    {
        return $this->belongsTo(Linha::class);
    }

    public function colecao()
    {
        return $this->belongsTo(Colecao::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function ncm()
    {
        return $this->belongsTo(NCM::class);
    }

    public function unidadeMedida()
    {
        return $this->belongsTo(UnidadeMedida::class);
    }

    public function unidadeCaixa()
    {
        return $this->belongsTo(UnidadeCaixa::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function subGrupo()
    {
        return $this->belongsTo(SubGrupo::class);
    }

    public function precoVenda()
    {
        return $this->hasMany(PrecoVenda::class)->with('observacoes');
    }

    public function precoCusto()
    {
        return $this->hasMany(PrecoCusto::class);
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
