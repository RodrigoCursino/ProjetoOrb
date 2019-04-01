<form method="POST"
      enctype="multipart/form-data"
      id="form_fornecedor"
      action="{{route('fornecedores.store')}}"
>
    {{method_field('post')}}
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('fornecedor.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <h4 class="text-center">Endereco</h4>
    <hr>
    <fieldset id="endereco">
    <!-- endereco -->
        @include('fornecedor.partials.form_endereco')
    <!-- endereco -->
    </fieldset>
    <br>
    <h4 class="text-center">Contato</h4>
    <hr>
    <fieldset id="contato">
    <!-- contato -->
        @include('fornecedor.partials.form_contato')
    <!-- contato -->
    </fieldset>
    <br>
    <h4 class="text-center">Dados Bancários</h4>
    <hr>
    <fieldset id="dados_bancarios">
    <!-- dados_bancarios -->
        @include('fornecedor.partials.form_dados_bancarios')
    <!-- dados_bancarios -->
    </fieldset>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
