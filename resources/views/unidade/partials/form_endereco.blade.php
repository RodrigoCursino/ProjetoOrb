<!-- Começo Form -->
    <!-- CEP -->
    <div class="form-group">
      <label for="cep">CEP : </label>
      <input type="text"
             name="cep"
             class="form-control"
             id="cep"
             value="{{isset($unidade->endereco->cep) ? $unidade->endereco->cep : old('cep')}}"
      >
      @if ($errors->has('cep'))
          <span class="help-block  text-danger">
            <strong>{{ $errors->first('cep') }}</strong>
          </span>
      @endif
    </div>
    <!-- CEP -->
    <!-- Rua e Número -->
    <div class="form-group">
        <div class="row">
            <!-- Logradouro -->
            <div class="col-lg-10">
                <label for="logradouro">Logradouro : </label>
                <input type="text"
                       name="logradouro"
                       class="form-control"
                       id="logradouro"
                       value="{{isset($unidade->endereco->logradouro) ? $unidade->endereco->logradouro : old('logradouro')}}"
                >
                @if ($errors->has('logradouro'))
                    <span class="help-block  text-danger">
                    <strong>{{ $errors->first('logradouro') }}</strong>
                </span>
                @endif
            </div>
            <!-- Logradouro -->

            <!-- Número -->
            <div class="col-lg-2">
                <label for="numero">Número : </label>

                <input type="text"
                       name="numero"
                       class="form-control"
                       id="numero"
                       value="{{isset($unidade->endereco->numero) ? $unidade->endereco->numero : old('numero')}}"
                >
                @if ($errors->has('numero'))
                    <span class="help-block  text-danger">
                        <strong>{{ $errors->first('numero') }}</strong>
                    </span>
                @endif
            </div>
        <!-- Número -->
        </div>
    </div>
    <!-- Rua e Número -->
    <!-- Bairro e Cidade -->
    <div class="form-group">
      <div class="row">

        <!-- Complemento -->
        <div class="col-lg-4">
            <label for="complemento">Complemento : </label>
            <input type="text"
                   name="complemento"
                   class="form-control"
                   id="complemento"
                   value="{{isset($unidade->endereco->complemento) ? $unidade->endereco->complemento : old('complemento')}}"
            >
            @if ($errors->has('complemento'))
                <span class="help-block  text-danger">
                  <strong>{{ $errors->first('complemento') }}</strong>
              </span>
            @endif
        </div>
        <!-- Complemento -->

        <!-- Bairro -->
        <div class="col-lg-8">
            <label for="bairro">Bairro : </label>
            <input type="text"
                   name="bairro"
                   class="form-control"
                   id="bairro"
                   value="{{isset($unidade->endereco->bairro) ? $unidade->endereco->bairro : old('bairro')}}"
            >
            @if ($errors->has('bairro'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('bairro') }}</strong>
                </span>
            @endif
        </div>
        <!-- Bairro -->
    </div>
    </div>
    <!-- Bairro e Cidade -->
    <!-- Estado e Pais -->
    <div class="form-group">
    <div class="row">
        <!-- Cidade -->
        <div class="col-lg-4">
            <label for="cidade">Cidade : </label>
            <input type="text"
                   name="cidade"
                   class="form-control"
                   id="cidade"
                   value="{{isset($unidade->endereco->cidade) ? $unidade->endereco->cidade : old('cidade')}}"
            >
            @if ($errors->has('cidade'))
                <span class="help-block  text-danger">
                  <strong>{{ $errors->first('cidade') }}</strong>
                </span>
            @endif
        </div>
        <!-- Cidade -->
        <!-- Estado -->
        <div class="col-lg-4">
            <label for="estado">Estado : </label>
            <input type="text"
                   name="estado"
                   class="form-control"
                   id="estado"
                   value="{{isset($unidade->endereco->estado) ? $unidade->endereco->estado : old('estado')}}"
            >
            @if ($errors->has('estado'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('estado') }}</strong>
                </span>
            @endif
        </div>
        <!-- Estado -->
        <!-- País -->
        <div class="col-lg-4">
            <label for="pais">País : </label>
            <input type="text"
                   name="pais"
                   class="form-control"
                   id="pais"
                   value="{{isset($unidade->endereco->pais) ? $unidade->endereco->pais : old('pais')}}"
            >
            @if ($errors->has('pais'))
                <span class="help-block  text-danger">
                  <strong>{{ $errors->first('pais') }}</strong>
                </span>
            @endif
        </div>
        <!-- País -->
    </div>
</div>
    <!-- Estado e Pais -->
<!-- Fim do form -->
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        