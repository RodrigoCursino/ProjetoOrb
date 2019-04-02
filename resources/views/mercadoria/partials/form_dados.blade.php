
     <input type="hidden" name="_method" value="POST">
     <!-- Início do form -->
     {{csrf_field()}}
     <input type="hidden" name="id_mercadoria">

     <!-- Fornecedor -->
     <div class="form-group">
         <div class="row">
             <!-- Grupo -->
             <div class="col-lg-12">
                 <label for="fornecedor_id">Fornecedor : </label>
                 <select type="text"
                         name="fornecedor_id"
                         class="form-control"
                         id="fornecedor_id"
                 >
                     @foreach($fornecedores as $fornecedor)
                         <option value="{{$fornecedor->id}}">{{$fornecedor->nome_fantasia}}</option>
                     @endforeach
                 </select>
                 @if ($errors->has('fornecedor_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('fornecedor_id') }}</strong>
                     </span>
                 @endif
             </div>
         </div>
     </div>
     <!-- Fornecedor -->


     <!-- Grupo -->
     <div class="form-group">
         <div class="row">
             <!-- Grupo -->
             <div class="col-lg-12">
                 <label for="grupo_id">Grupo : </label>
                 <select type="text"
                         name="grupo_id"
                         class="form-control"
                         id="grupo_id"
                 >
                     @foreach($grupos as $grupo)
                         <option value="{{$grupo->id}}">{{$grupo->nome}}</option>
                     @endforeach
                 </select>
                 @if ($errors->has('grupo_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('grupo_id') }}</strong>
                     </span>
                 @endif
             </div>
         </div>
     </div>
     <!-- Grupo -->


     <!-- Sub Grupo -->
     <div class="form-group">
         <div class="row">
             <!-- Sub Grupo -->
             <div class="col-lg-12" id="sub_grupos">
                 <label for="sub_grupo_id">Sub Grupo : </label>
                 <select type="text"
                         disabled
                         name="sub_grupo_id"
                         class="form-control"
                         id="sub_grupo_id"
                 >
                    <option value="">Selecione um Sub Grupo</option>
                 </select>
                 @if ($errors->has('sub_grupo_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('sub_grupo_id') }}</strong>
                     </span>
                 @endif
             </div>
         </div>
     </div>
     <!-- Sub Grupo -->

     <!-- Nome e NCM -->
     <div class="form-group">
         <div class="row">
             <!-- Nome -->
             <div class="col-lg-6">
                 <label for="nome">Nome : </label>
                 <input type="text"
                        name="nome"
                        class="form-control"
                        id="nome"
                        value="{{old('nome')}}"
                 >
                 @if ($errors->has('nome'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('nome') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Nome -->
             <!-- NCM -->
             <div class="col-lg-6">
                 <label for="ncm">NCM : </label>
                 <input type="text"
                        name="ncm"
                        class="form-control"
                        id="ncm"
                        value="{{old('ncm')}}"
                 >
                 @if ($errors->has('ncm'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('ncm') }}</strong>
                </span>
                 @endif
             </div>
             <!-- NCM -->
         </div>
     </div>
     <!-- Nome e NCM -->

     <!-- Unidade Mediada e Unidade Caixa -->
     <div class="form-group">
         <div class="row">
             <!-- Unidade Medida -->
             <div class="col-lg-6">
                 <label for="unidade_medida">Unidade Medida : </label>
                 <input type="text"
                        name="unidade_medida"
                        class="form-control"
                        id="unidade_medida"
                        value="{{old('unidade_medida')}}"
                 >
                 @if ($errors->has('unidade_medida'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('unidade_medida') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Unidade Medida -->
             <!-- Unidade Caixa -->
             <div class="col-lg-6">
                 <label for="unidade_caixa">Unidade Caixa : </label>
                 <input type="text"
                        name="unidade_caixa"
                        class="form-control"
                        id="unidade_caixa"
                        value="{{old('unidade_caixa')}}"
                 >
                 @if ($errors->has('unidade_caixa'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('unidade_caixa') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Unidade Caixa -->
         </div>
     </div>
     <!-- Unidade Mediada e Unidade Caixa -->

    <!-- Fim do form -->