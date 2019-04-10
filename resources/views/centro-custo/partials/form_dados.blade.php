<!-- Nome -->
<div class="form-group">
    <div class="row">
        <!-- NOME -->
        <div class="col-lg-12">
            <label for="nome_centro_custo">Nome : </label>
            <input type="text"
                   name="nome_centro_custo"
                   class="form-control"
                   id="nome_centro_custo"
                   value="{{isset($centroCusto->nome) ? $centroCusto->nome : old('nome')}}"
            >
            @if ($errors->has('nome_centro_custo'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome_centro_custo') }}</strong>
           </span>
            @endif
        </div>
        <!-- NOME -->
    </div>
</div>
<!-- Nome -->

<!-- Observação -->

                                                                                                                                                                                                                                                                                    