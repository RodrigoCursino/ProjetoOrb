    @if(isset($ncm->id))
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('ncms.update',['id'=> $ncm->id])}}"
        >
       {{method_field('put')}}
       <input type="hidden" name="id_ncm" value="{{$ncm->id}}">
    @else
        <form method="POST"
              enctype="multipart/form-data"
              action="{{route('ncms.store')}}"
        >
        {{method_field('post')}}
    @endif
    @csrf
    <h4 class="text-center">Dados</h4>
    <hr>
    <fieldset id="dados">
    <!-- dados -->
        @include('ncm.partials.form_dados')
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