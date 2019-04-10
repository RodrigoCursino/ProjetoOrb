    @if(isset($contaContabil->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('contacontabeis.update',['id'=> $contaContabil->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_contaContabil" value="{{$contaContabil->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('contacontabeis.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('conta-contabil.partials.form_dados')
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