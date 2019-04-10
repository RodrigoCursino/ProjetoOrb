<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 29/03/2019
 * Time: 14:26
 */

namespace App\Service;
use App\Models\Contato;
use App\Models\DadosBancarios;
use App\Models\Endereco;
use App\Models\Fabricante;
use App\Models\Fornecedor;
use App\Models\Funcionario;
use App\Traits\DadosComunsCadastro;
use Illuminate\Support\Facades\DB;


use App\Http\Requests\FornecedorCreateRequest;

class FuncionariosService
{
    public function create(FornecedorCreateRequest $request)
    {
        return DB::transaction(function () use ($request) {

            $dados_bancario = DadosComunsCadastro::saveDadosBancarios($request);
            $endereco       = DadosComunsCadastro::saveEndereco($request);
            $contato        = DadosComunsCadastro::saveContato($request);

            $funcionario = new Funcionario();

            /**
             * TODO
             */

            $funcionario->save();

            return $funcionario;
        });
    }


    public function update(FornecedorCreateRequest $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {

            //Fornecedor
            $fabricante = Fabricante::findOrFail($id);

            /**
             * TODO
             */
            $fabricante->save();

            // Endereco
            DadosComunsCadastro::findEndereco($request, $fabricante->endereco_id);

            //Contato
            DadosComunsCadastro::findContato($request, $fabricante->contato_id);

            // Dados Bancários
            DadosComunsCadastro::findDadosBancarios($request, $fabricante->dados_bancarios_id);

            return $fabricante;

        });

    }

    public function destroy($id)
    {

      return DB::transaction(function () use ($id) {
       $fabricante = Fornecedor::findOrFail($id);

       // Contato
       DadosComunsCadastro::deleteContato($fabricante->contato_id);

       // Endereco
       DadosComunsCadastro::deleteEndereco($fabricante->endereco_id);

       // Dados Bancários
       DadosComunsCadastro::deleteDadosBancarios($fabricante->dados_bancarios_id);

       $fabricante->ativo = 0;
       $fabricante->save();

       return true;

      });
    }
}