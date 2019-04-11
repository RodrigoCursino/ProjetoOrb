<!-- Nome -->
<div class="form-group">
    <div class="row">
        <!-- NOME -->
        <div class="col-lg-12">
            <label for="nome">Nome : </label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   id="nome"
                   value="{{isset($retencao->nome) ? $retencao->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- NOME -->
    </div>
</div>
<!-- Nome -->

<!-- Observação -->
<div class="form-group">
    <label for="observacao">Observação : </label>
    <textarea
            name="observacao"
            class="form-control"
            id="observacao"
    >{{isset($retencao->observacao) ? $retencao->observacao : old('observacao')}}</textarea>
    @if ($errors->has('observacao'))
        <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
    @endif
</div>
<!-- Observação -->