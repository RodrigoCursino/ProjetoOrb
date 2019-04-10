    @if(isset($grupo->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('grupos.update',['id'=> $grupo->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_grupo" value="{{$grupo->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('grupos.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('grupo.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
                                                                                                                                                                                                                                                                                                                                                                                                                                                     