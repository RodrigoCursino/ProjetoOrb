<!-- Começo Form -->
    <!-- CEP -->
    <div class="form-group">
      <label for="cep">CEP : </label>
      <input type="text"
             name="cep"
             class="form-control"
             id="cep"
             value="{{old('cep')}}"
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
                       value="{{old('logradouro')}}"
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
                       value="{{old('numero')}}"
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
        <!-- Bairro -->
        <div class="col-lg-6">
            <label for="bairro">Bairro : </label>
            <input type="text"
                   name="bairro"
                   class="form-control"
                   id="bairro"
                   value="{{old('bairro')}}"
            >
            @if ($errors->has('bairro'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('bairro') }}</strong>
                </span>
            @endif
        </div>
        <!-- Bairro -->

        <!-- Cidade -->
        <div class="col-lg-6">
            <label for="cidade">Cidade : </label>
            <input type="text"
                   name="cidade"
                   class="form-control"
                   id="cidade"
                   value="{{old('cidade')}}"
            >
            @if ($errors->has('cidade'))
                <span class="help-block  text-danger">
                  <strong>{{ $errors->first('cidade') }}</strong>
                </span>
            @endif
        </div>
        <!-- Cidade -->
    </div>
    </div>
    <!-- Bairro e Cidade -->
    <!-- Estado e Pais -->
    <div class="form-group">
    <div class="row">
        <!-- Estado -->
        <div class="col-lg-6">
            <label for="estado">Estado : </label>
            <input type="text"
                   name="estado"
                   class="form-control"
                   id="estado"
                   value="{{old('estado')}}"
            >
            @if ($errors->has('estado'))
                <span class="help-block  text-danger">
                    <strong>{{ $errors->first('estado') }}</strong>
                </span>
            @endif
        </div>
        <!-- Estado -->
        <!-- País -->
        <div class="col-lg-6">
            <label for="pais">País : </label>
            <input type="text"
                   name="pais"
                   class="form-control"
                   id="pais"
                   value="{{old('pais')}}"
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
