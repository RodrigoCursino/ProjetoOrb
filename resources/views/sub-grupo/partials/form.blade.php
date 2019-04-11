    @if(isset($subGrupo->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('subgrupos.update',['id'=> $subGrupo->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_sub_grupo" value="{{$subGrupo->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('subgrupos.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('sub-grupo.partials.form_dados')
    <!-- dados -->
    </fieldset>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success pull-right">
            Salvar
        </button>
    </div>
</form>
