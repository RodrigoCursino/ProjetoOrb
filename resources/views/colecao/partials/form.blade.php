    @if(isset($colecao->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('colecoes.update',['id'=> $colecao->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_colecao" value="{{$colecao->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('colecoes.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('colecao.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
