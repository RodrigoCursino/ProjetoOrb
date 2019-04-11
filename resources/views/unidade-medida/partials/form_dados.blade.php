<!-- Legenda -->
<div class="form-group">
    <div class="row">
        <!-- Legenda -->
        <div class="col-lg-12">
            <label for="legenda">Legenda : </label>
            <input type="text"
                   name="legenda"
                   class="form-control"
                   id="legenda"
                   value="{{isset($unidadeMedida->legenda) ? $unidadeMedida->legenda : old('legenda')}}"
            >
            @if ($errors->has('legenda'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('legenda') }}</strong>
           </span>
            @endif
        </div>
        <!-- Legenda -->
    </div>
</div>
<!-- Legenda -->

<!-- Observação -->
<div class="form-group">
    <label for="descricao">Descrição : </label>
    <textarea
            name="descricao"
            class="form-control"
            id="descricao"
    >{{isset($unidadeMedida->descricao) ? $unidadeMedida->descricao : old('descricao')}}</textarea>
    @if ($errors->has('descricao'))
        <span class="help-block text-danger">
              <strong>{{ $errors->first('descricao') }}</strong>
            </span>
    @endif
</div>
<!-- Observação -->
