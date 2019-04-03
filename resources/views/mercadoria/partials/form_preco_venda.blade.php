<!-- Começo Form -->
<!-- Preço venda -->
<div class="form-group">
    <div class="row">
        <!-- Valor -->
        <div class="col-lg-6">
            <label for="valor_venda">Valor Venda : </label>
            <input type="text"
                   name="valor_venda"
                   class="form-control"
                   id="valor_venda"
                   value="{{old('valor_venda')}}"
            >
            @if ($errors->has('valor_venda'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('valor_venda') }}</strong>
                </span>
            @endif
        </div>
        <!-- Valor -->

        <!-- Data -->
        <div class="col-lg-6">
            <label for="data_venda">Data Venda : </label>

            <input type="date"
                   name="data_venda"
                   class="form-control"
                   id="data_venda"
                   value="{{old('data_venda')}}"
            >
            @if ($errors->has('data_venda'))
                <span class="help-block  text-danger">
                        <strong>{{ $errors->first('data_venda') }}</strong>
                    </span>
            @endif
        </div>
        <!-- Data -->
    </div>
</div>
<!-- Preço Venda -->

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
                   value="{{old('desconto_venda')}}"
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
                   value="{{old('validade_venda')}}"
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
    >{{old('descricao_preco_venda')}}</textarea>
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
    >{{old('observacao_preco_venda')}}</textarea>
    @if ($errors->has('observacao_preco_venda'))
        <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao_preco_venda') }}</strong>
            </span>
    @endif
</div>
<!-- Descrição Preço de Venda -->

<!-- Fim do form -->
