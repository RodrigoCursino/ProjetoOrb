<!-- Cod -->
<div class="form-group">
    <div class="row">
        <!-- Cod -->
        <div class="col-lg-12">
            <label for="cod">Cod : </label>
            <input type="text"
                   name="cod"
                   class="form-control"
                   id="cod"
                   value="{{isset($ncm->cod) ? $ncm->cod : old('cod')}}"
            >
            @if ($errors->has('cod'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('cod') }}</strong>
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
            <label for="descricao">Descrição : </label>
            <textarea type="text"
                   name="descricao"
                   class="form-control"
                   id="descricao"
            >{{isset($ncm->descricao) ? $ncm->descricao : old('descricao')}}</textarea>
            @if ($errors->has('descricao'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('descricao') }}</strong>
           </span>
            @endif
        </div>
        <!-- Descricao -->
    </div>
</div>
<!-- Descricao -->

                                                                                                                                                                                                                                                                                    