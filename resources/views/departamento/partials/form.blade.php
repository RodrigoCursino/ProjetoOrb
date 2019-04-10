    @if(isset($departamento->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('departamentos.update',['id'=> $departamento->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_departamento" value="{{$departamento->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('departamentos.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('departamento.partials.form_dados')
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