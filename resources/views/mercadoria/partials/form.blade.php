    @if(isset($mercadoria->id))
        <form method="POST"
              enctype="multipart/form-data"
              id="form_fornecedor"
              action="{{route('mercadorias.update',['id' => $mercadoria->id])}}"
        >
        {{method_field('put')}}
        <input type="hidden" name="id_mercadoria" value="{{$mercadoria->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              id="form_fornecedor"
              action="{{route('mercadorias.store')}}"
        >
        {{method_field('post')}}
    @endif
        @csrf
            <form>
        <h4 class="text-center">Dados</h4>
        <hr>
        <fieldset id="dados">
        <!-- dados -->
            @include('mercadoria.partials.form_dados')
        <!-- dados -->
        </fieldset>
        <br>
        <h4 class="text-center">Preço</h4>
        <hr>
        <fieldset id="endereco">
        <!-- endereco -->
            @include('mercadoria.partials.form_preco')
        <!-- endereco -->
        </fieldset>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success pull-right">
                Salvar
            </button>
        </div>
    </form>
