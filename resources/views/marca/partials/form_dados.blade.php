<!-- Nome -->
<div class="form-group">
    <div class="row">
        <!-- NOME -->
        <div class="col-lg-6">
            <label for="nome">Nome : </label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   id="nome"
                   value="{{isset($marca->nome) ? $marca->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- NOME -->
        <!-- Fabricante -->
        <div class="col-lg-6">
            <label for="nome">Fabricante : </label>
            <select type="text"
                     name="fabricante_id"
                     class="form-control"
                     id="fabricante_id"
            >
                @foreach($fabricantes as $fabricante)
                    <option {{isset($marca->fabricante_id) && $marca->fabricante_id == $fabricante->id  ? "selected" : ""}}
                            value="{{$fabricante->id}}"
                    >
                        {{$fabricante->nome}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('fabricante_id'))
                <span class="help-block text-danger">
                     <strong>{{ $errors->first('fabricante_id') }}</strong>
                  </span>
            @endif
        </div>
        <!-- Fabricante -->
    </div>
</div>
<!-- Nome -->

<!-- Observação -->

                                                                                                                                                                                                                                                                                    