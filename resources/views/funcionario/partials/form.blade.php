    @if(isset($funcionario->id))
        <form method="POST"
              enctype="multipart/form-data"
              id="form_funcionario"
              action="{{route('funcionarios.update',['id'=> $funcionario->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_funcionario" value="{{$funcionario->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              id="form_funcionario"
              action="{{route('funcionarios.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('funcionario.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <h4 class="text-center">Endereco</h4>
    <hr>
    <fieldset id="endereco">
    <!-- endereco -->
        @include('funcionario.partials.form_endereco')
    <!-- endereco -->
    </fieldset>
    <br>
    <h4 class="text-center">Contato</h4>
    <hr>
    <fieldset id="contato">
    <!-- contato -->
        @include('funcionario.partials.form_contato')
    <!-- contato -->
    </fieldset>
    <br>
    <h4 class="text-center">Dados Bancários</h4>
    <hr>
    <fieldset id="dados_bancarios">
    <!-- dados_bancarios -->
       @include('funcionario.partials.form_dados_bancarios')
    <!-- dados_bancarios -->
    </fieldset>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
                                                                                                                                                                                                                                                                                                                                                                                                                                                     