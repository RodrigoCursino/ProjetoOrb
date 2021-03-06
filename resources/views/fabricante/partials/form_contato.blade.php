<!-- Email -->
<div class="form-group">
    <label for="email">email : </label>
    <input type="email"
           name="email"
           class="form-control"
           id="email"
           value="{{isset($fabricante->contato->email) ? $fabricante->contato->email : old('email')}}"
    >
    @if ($errors->has('email'))
        <span class="help-block  text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
    @endif
</div>
<!-- Email -->
<!-- Telefone e Celular -->
<div class="form-group">
    <div class="row">
        <!-- Telefone -->
        <div class="col-lg-6">
            <label for="telefone">Telefone : </label>
            <input type="text"
                   name="telefone"
                   class="form-control"
                   id="telefone"
                   value="{{isset($fabricante->contato->telefone) ? $fabricante->contato->telefone : old('email')}}"
            >
            @if ($errors->has('telefone'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('telefone') }}</strong>
                </span>
            @endif
        </div>
        <!-- Telefone -->
        <!-- Celular -->
        <div class="col-lg-6">
            <label for="celular">Celular : </label>
            <input type="text"
                   name="celular"
                   class="form-control"
                   id="celular"
                   value="{{isset($fabricante->contato->celular) ? $fabricante->contato->celular : old('email')}}"
            >
            @if ($errors->has('celular'))
                <span class="help-block  text-danger">
                  <strong>{{ $errors->first('celular') }}</strong>
                </span>
            @endif
        </div>
        <!-- Celular -->
    </div>
</div>
<!-- Telefone e Celular -->
<!-- Nome para Contato -->
<div class="form-group">
    <label for="nome">Nome para Contato : </label>
    <input type="text"
           name="nome"
           class="form-control"
           id="nome"
           value="{{isset($fabricante->contato->nome) ? $fabricante->contato->nome : old('nome')}}"
    >
    @if ($errors->has('nome'))
        <span class="help-block  text-danger">
          <strong>{{ $errors->first('nome') }}</strong>
        </span>
    @endif
</div>
<!-- Email -->
                                                                                                                                                                                                                                                                                    