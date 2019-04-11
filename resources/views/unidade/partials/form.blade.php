    @if(isset($unidade->id))
        <form method="POST"
              enctype="multipart/form-data"
              id="form_unidade"
              action="{{route('unidades.update',['id'=> $unidade->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_unidade" value="{{$unidade->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              id="form_fabricante"
              action="{{route('unidades.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('unidade.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <h4 class="text-center">Endereco</h4>
    <hr>
    <fieldset id="endereco">
    <!-- endereco -->
        @include('unidade.partials.form_endereco')
    <!-- endereco -->
    </fieldset>
    <br>
    <h4 class="text-center">Contato</h4>
    <hr>
    <fieldset id="contato">
    <!-- contato -->
        @include('unidade.partials.form_contato')
    <!-- contato -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
