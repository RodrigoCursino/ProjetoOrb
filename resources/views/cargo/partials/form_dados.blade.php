<!-- Cod -->
<div class="form-group">
    <div class="row">
        <!-- Cod -->
        <div class="col-lg-12">
            <label for="nome">Nome : </label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   id="nome"
                   value="{{isset($cargo->nome) ? $cargo->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- Cod -->
    </div>
</div>
<!-- Cod -->

<!-- Descricao -->
<div class="form-group">
    <div class="row">
        <!-- Descricao -->
        <div class="col-lg-12">
            <label for="observacao">Observação : </label>
            <textarea type="text"
                   name="observacao"
                   class="form-control"
                   id="observacao"
            >{{isset($cargo->observacao) ? $cargo->observacao : old('observacao')}}</textarea>
            @if ($errors->has('observacao'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('observacao') }}</strong>
           </span>
            @endif
        </div>
        <!-- Descricao -->
    </div>
</div>
<!-- Descricao -->

                                                                                                                                                                                                                                                                                    