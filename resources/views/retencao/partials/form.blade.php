    @if(isset($retencao->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('retencoes.update',['id'=> $retencao->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_retencao" value="{{$retencao->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('retencoes.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('retencao.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>