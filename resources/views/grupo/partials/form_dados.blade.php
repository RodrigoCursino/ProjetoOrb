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
                   value="{{isset($grupo->nome) ? $grupo->nome : old('nome')}}"
            >
            @if ($errors->has('nome'))
                <span class="help-block  text-danger">
             <strong>{{ $errors->first('nome') }}</strong>
           </span>
            @endif
        </div>
        <!-- NOME -->
        <!-- NCM -->
        <div class="col-lg-6">
            <label for="ncm_id">Ncm : </label>
            <select type="text"
                    name="ncm_id"
                    class="form-control"
                    id="ncm_id"
            >
                <option value="0">Selecione uma Opção</option>
                @foreach($ncms as $ncm)
                    <option {{isset($grupo->ncm->id) && $grupo->ncm->id == $ncm->id  ? "selected" : ""}}
                            value="{{$ncm->id}}"
                    >
                        {{$ncm->cod}}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('ncm_id'))
                <span class="help-block text-danger">
            <strong>{{ $errors->first('ncm_id') }}</strong>
         </span>
            @endif
        </div>
        <!-- NCM -->
    </div>
</div>
<!-- Nome -->

<!-- Observação -->

<!-- Observação -->
<div class="form-group">
    <label for="observacao">Observação : </label>
    <textarea
            name="observacao"
            class="form-control"
            id="observacao"
    >{{isset($grupo->observacao) ? $grupo->observacao : old('observacao')}}</textarea>
    @if ($errors->has('observacao'))
        <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
    @endif
</div>

<!-- Observação -->

                                                                                                                                                                                                                                                                                    