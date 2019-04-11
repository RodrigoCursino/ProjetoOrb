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
                   value="{{isset($subGrupo->nome) ? $subGrupo->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- Nome -->
        <!-- Grupo -->
        <div class="col-lg-6">
            <label for="grupo_id">Grupo : </label>
            <select type="text"
                    name="grupo_id"
                    class="form-control"
                    id="grupo_id"
            >
                @foreach($grupos as $grupo)
                    <option {{isset($subGrupo->grupo_id) && $subGrupo->grupo_id == $grupo->id ? "selected" : ""}}
                            value="{{$grupo->id}}">
                        {{$grupo->nome}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('grupo_id'))
                <span class="help-block text-danger">
                        <strong>{{ $errors->first('grupo_id') }}</strong>
                     </span>
            @endif
        </div>
        <!-- Grupo -->
    </div>
</div>
<!-- Cod -->
