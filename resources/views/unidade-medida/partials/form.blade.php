    @if(isset($unidadeMedida->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('unidadesmedida.update',['id'=> $unidadeMedida->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_sub_grupo" value="{{$unidadeMedida->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('unidadesmedida.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('unidade-medida.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
