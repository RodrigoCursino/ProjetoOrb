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
                   value="{{isset($categoria->nome) ? $categoria->nome : old('nome')}}"
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

                                                                                                                                                                                                                                                                                    