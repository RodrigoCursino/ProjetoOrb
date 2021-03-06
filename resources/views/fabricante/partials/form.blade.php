    @if(isset($fabricante->id))
        <form method="POST"
              enctype="multipart/form-data"
              id="form_fabricante"
              action="{{route('fabricantes.update',['id'=> $fabricante->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_fabricante" value="{{$fabricante->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              id="form_fabricante"
              action="{{route('fabricantes.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('fabricante.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <h4 class="text-center">Endereco</h4>
    <hr>
    <fieldset id="endereco">
    <!-- endereco -->
        @include('fabricante.partials.form_endereco')
    <!-- endereco -->
    </fieldset>
    <br>
    <h4 class="text-center">Contato</h4>
    <hr>
    <fieldset id="contato">
    <!-- contato -->
        @include('fabricante.partials.form_contato')
    <!-- contato -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
                                                                                                                                                                                                                                                                                                                                                                                                                                                     