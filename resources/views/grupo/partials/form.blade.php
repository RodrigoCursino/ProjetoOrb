    @if(isset($fornecedor->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('grupos.update',['id'=> $fornecedor->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_fornecedor" value="{{$fornecedor->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('grupos.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- contato -->
        @include('fornecedor.partials.form_contato')
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