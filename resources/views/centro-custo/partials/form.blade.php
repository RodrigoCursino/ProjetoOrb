    @if(isset($centroCusto->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('centroscusto.update',['id'=> $centroCusto->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_centocusto" value="{{$centroCusto->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('centroscusto.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('centro-custo.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <h4 class="text-center">Dados Bancários</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
       @include('centro-custo.partials.form_dados_bancarios')
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