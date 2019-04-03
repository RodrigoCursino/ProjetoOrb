<!-- Começo Form -->
    <!-- Preço custo -->
    <div class="form-group">
        <div class="row">
            <!-- Valor -->
            <div class="col-lg-6">
                <label for="valor_custo">Valor Custo : </label>
                <input type="text"
                       name="valor_custo"
                       class="form-control"
                       id="valor_custo"
                       value="{{old('valor_custo')}}"
                >
                @if ($errors->has('valor_custo'))
                    <span class="help-block  text-danger">
                    <strong>{{ $errors->first('valor_custo') }}</strong>
                </span>
                @endif
            </div>
            <!-- Valor -->

            <!-- Data -->
            <div class="col-lg-6">
                <label for="data_custo">Data Custo : </label>

                <input type="date"
                       name="data_custo"
                       class="form-control"
                       id="data_custo"
                       value="{{old('data_custo')}}"
                >
                @if ($errors->has('data_custo'))
                    <span class="help-block  text-danger">
                        <strong>{{ $errors->first('data_custo') }}</strong>
                    </span>
                @endif
            </div>
        <!-- Data -->
        </div>
    </div>
    <!-- Preço Custo -->

<!-- Fim do form -->
