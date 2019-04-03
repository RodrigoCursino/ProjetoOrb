<form method="POST"
      enctype="multipart/form-data"
      id="form_fornecedor"
      action="{{route('mercadorias.store')}}"
>
    {{method_field('post')}}
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('mercadoria.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <h4 class="text-center">Preço Custo</h4>
    <hr>
    <fieldset id="endereco">
    <!-- endereco -->
        @include('mercadoria.partials.form_preco_custo')
    <!-- endereco -->
    </fieldset>
    <br>
    <h4 class="text-center">Preço Venda</h4>
    <hr>
    <fieldset id="contato">
    <!-- contato -->
        @include('mercadoria.partials.form_preco_venda')
    <!-- contato -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
