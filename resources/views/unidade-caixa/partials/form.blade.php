    @if(isset($unidadeCaixa->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('unidadescaixa.update',['id'=> $unidadeCaixa->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_sub_grupo" value="{{$unidadeCaixa->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('unidadescaixa.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('unidade-caixa.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
