<!-- Cod -->
<div class="form-group">
    <div class="row">
        <!-- Nome -->
        <div class="col-lg-6">
            <label for="nome">Nome : </label>
            <input type="text"
                   name="nome"
                   class="form-control"
                   id="nome"
                   value="{{isset($departamento->nome) ? $departamento->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- Nome -->
        <!-- Unidade -->
        <div class="col-lg-6">
            <label for="unidade_id">Unidade : </label>
            <select type="text"
                    name="unidade_id"
                    class="form-control"
                    id="unidade_id"
            >
                @foreach($unidades as $unidade)
                    <option {{isset($departamento->unidade_id) && $departamento->unidade_id == $unidade->id ? "selected" : ""}}
                            value="{{$unidade->id}}">
                        {{$unidade->nome_fantasia}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('unidade_id'))
                <span class="help-block text-danger">
                        <strong>{{ $errors->first('unidade_id') }}</strong>
                     </span>
            @endif
        </div>
        <!-- Unidade -->
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
            >{{isset($departamento->descricao) ? $departamento->descricao : old('descricao')}}</textarea>
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