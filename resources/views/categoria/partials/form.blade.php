    @if(isset($categoria->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('categorias.update',['id'=> $categoria->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_categoria" value="{{$categoria->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('categorias.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('categoria.partials.form_dados')
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