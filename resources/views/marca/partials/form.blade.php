    @if(isset($marca->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('marcas.update',['id'=> $marca->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_marca" value="{{$marca->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('marcas.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('marca.partials.form_dados')
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