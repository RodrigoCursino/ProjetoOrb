<!-- Começo Form -->
    <!-- Preço custo e Venda -->
    @if(isset($mercadoria->precoCusto[0]->{'id'}))
        <input type="hidden" name="preco_custo_id" value="{{ $mercadoria->precoCusto[0]->{'id'} }}">
    @endif
    <div class="form-group">
        <div class="row">
            <!-- Valor Custo -->
            <div class="col-lg-6">
                <label for="valor_custo">Valor Custo : </label>
                <input type="text"
                       name="valor_custo"
                       class="form-control"
                       id="valor_custo"
                       value="{{isset($mercadoria->precoCusto[0]->{'valor'}) ? $mercadoria->precoCusto[0]->{'valor'} : old('valor_custo')}}"
                >
                @if ($errors->has('valor_custo'))
                    <span class="help-block  text-danger">
                    <strong>{{ $errors->first('valor_custo') }}</strong>
                </span>
                @endif
            </div>
            <!-- Valor Custo -->

            <!-- Valor Venda -->
            @if(isset($mercadoria->precoVenda[0]->{'id'}))
                <input type="hidden" name="preco_venda_id" value="{{ $mercadoria->precoVenda[0]->{'id'} }}">
            @endif
            <div class="col-lg-6">
                <label for="valor_venda">Valor Venda : </label>
                <input type="text"
                       name="valor_venda"
                       class="form-control"
                       id="valor_venda"
                       value="{{isset($mercadoria->precoVenda[0]->{'valor'}) ? $mercadoria->precoVenda[0]->{'valor'} : old('valor_venda')}}"
                >
                @if ($errors->has('valor_venda'))
                    <span class="help-block  text-danger">
                    <strong>{{ $errors->first('valor_venda') }}</strong>
                </span>
                @endif
            </div>
            <!-- Valor -->
        </div>
    </div>
    <!-- Preço Custo e Venda -->

<!-- Desconto e Validade -->
<div class="form-group">
    <div class="row">
        <!-- Desconto Preço de -->
        <div class="col-lg-6">
            <label for="desconto_venda">Valor Máximo de Desconto Preço de Venda : </label>
            <input type="text"
                   name="desconto_venda"
                   class="form-control"
                   id="desconto_venda"
                   value="{{isset($mercadoria->precoVenda[0]->{'observacoes'}->desconto_maximo) ? $mercadoria->precoVenda[0]->{'observacoes'}->desconto_maximo : old('desconto_venda')}}"
            >
            @if ($errors->has('desconto_venda'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('desconto_venda') }}</strong>
                </span>
            @endif
        </div>
        <!-- Desconto Preço de -->

        <!-- Data de Validade Preço -->
        <div class="col-lg-6">
            <label for="validade_venda">Data de Validade Preço Venda : </label>

            <input type="date"
                   name="validade_venda"
                   class="form-control"
                   id="validade_venda"
                   value="{{isset($mercadoria->precoVenda[0]->{'observacoes'}->validade) ? date('Y-m-d',strtotime($mercadoria->precoVenda[0]->{'observacoes'}->validade)) : old('validade_venda')}}"
            >
            @if ($errors->has('validade_venda'))
                <span class="help-block  text-danger">
                        <strong>{{ $errors->first('validade_venda') }}</strong>
                    </span>
            @endif
        </div>
        <!-- Data de Validade Preço -->
    </div>
</div>
<!-- Desconto e Validade -->

<!-- Descrição Preço de Venda -->
<div class="form-group">
    <label for="descricao_preco_venda">Descrição Preço de Venda : </label>
    <textarea
            name="descricao_preco_venda"
            class="form-control"
            id="observao"
    >{{isset($mercadoria->precoVenda[0]->{'observacoes'}->descricao) ? $mercadoria->precoVenda[0]->{'observacoes'}->descricao : old('descricao_preco_venda')}}</textarea>
    @if ($errors->has('descricao_preco_venda'))
        <span class="help-block text-danger">
           <strong>{{ $errors->first('descricao_preco_venda') }}</strong>
        </span>
    @endif
</div>
<!-- Descrição Preço de Venda -->

<!-- Observação Preço de Venda -->
<div class="form-group">
    <label for="observacao_preco_venda">Observação Preço de Venda : </label>
    <textarea
            name="observacao_preco_venda"
            class="form-control"
            id="observacao_preco_venda"
    >{{isset($mercadoria->precoVenda[0]->{'observacoes'}->observacao) ? $mercadoria->precoVenda[0]->{'observacoes'}->observacao : old('observacao_preco_venda')}}</textarea>
    @if ($errors->has('observacao_preco_venda'))
        <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao_preco_venda') }}</strong>
        </span>
    @endif
</div>
<!-- Descrição Preço de Venda -->

<!-- Fim do form -->
