    @if(isset($linha->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('linhas.update',['id'=> $linha->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_linha" value="{{$linha->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('linhas.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('linha.partials.form_dados')
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