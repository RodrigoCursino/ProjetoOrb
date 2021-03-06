<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricantesCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome_fabricante"   => "required",
            "natureza_juridica" => "required",
            "cnpj"              => "required",
            "ie"                => "required",
            "nome_fantasia"     => "required",
            "razao_social"      => "required",
            "observacao"        => "required",
            "cep"               => "required",
            "logradouro"        => "required",
            "numero"            => "required",
            "bairro"            => "required",
            "cidade"            => "required",
            "estado"            => "required",
            "pais"              => "required",
            "email"             => "required",
            "telefone"          => "required",
            "celular"           => "required",
            "nome"              => "required"
        ];
    }
}
