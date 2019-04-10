
<div class="form-group">
    <div class="row">
        <!-- Nome -->
        <div class="col-lg-6">
            <label for="nome">Nome : </label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   id="nome"
                   value="{{isset($contaContabil->nome) ? $contaContabil->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- Nome -->
        <!-- Cod Contabilidade -->
        <div class="col-lg-6">
            <label for="cod_contabilidade">Cod Contabilidade : </label>
            <input type="text"
                   name="cod_contabilidade"
                   class="form-control"
                   id="cod_contabilidade"
                   value="{{isset($contaContabil->cod_contabilidade) ? $contaContabil->cod_contabilidade : old('cod_contabilidade')}}"
            >
            @if ($errors->has('cod_contabilidade'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('cod_contabilidade') }}</strong>
           </span>
            @endif
        </div>
        <!-- Cod Contabilidade -->
    </div>
</div>



                                                                                                                                                                                                                                                                                    