
     <!-- Início do form -->
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
                     <option selected>Selecione uma Opção</option>
                     @foreach($fornecedores as $fornecedor)
                         <option {{isset($mercadoria->fornecedor_id) && $mercadoria->fornecedor_id == $fornecedor->id ? "selected" : ""}}  value="{{$fornecedor->id}}">{{$fornecedor->nome_fantasia}}</option>
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
                     <option selected>Selecione uma Opção</option>
                     @foreach($grupos as $grupo)
                         <option {{isset($mercadoria->grupo_id) && $mercadoria->grupo_id == $grupo->id ? "selected" : ""}} value="{{$grupo->id}}">{{$grupo->nome}}</option>
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
                         {{isset($mercadoria->sub_grupo_id) ? "" : "disabled"}}
                         name="sub_grupo_id"
                         class="form-control"
                         id="sub_grupo_id"
                 >
                    <option {{isset($mercadoria->sub_grupo_id) ? "value='".$mercadoria->sub_grupo_id."'" : "value=''"}}
                    >
                        {{isset($mercadoria->subGrupo->nome) ? $mercadoria->subGrupo->nome : "Selecione um Sub Grupo"}}
                    </option>
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
                        value="{{isset($mercadoria->nome) ? $mercadoria->nome : old('nome')}}"
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
                 <label for="ncm_id">NCM : </label>
                 <select type="text"
                         name="ncm_id"
                         class="form-control"
                         id="ncm_id"
                 >
                     <option selected>Selecione uma Opção</option>
                     @foreach($ncms as $ncm)
                         <option {{isset($mercadoria->ncm_id) && $mercadoria->ncm_id == $ncm->id ? "selected" : ""}}
                                 value="{{$ncm->id}}">
                                 {{$ncm->cod}}
                         </option>
                     @endforeach
                 </select>
                 @if ($errors->has('ncm_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('ncm_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- NCM -->
         </div>
     </div>
     <!-- Nome e NCM -->


     <!-- Nome e NCM -->
     <div class="form-group">
         <div class="row">
             <!-- Categoria -->
             <div class="col-lg-6">
                 <label for="ncm_id">Categoria : </label>
                 <select type="text"
                         name="categoria_id"
                         class="form-control"
                         id="categoria_id"
                 >
                     <option selected>Selecione uma Opção</option>
                     @foreach($categorias as $categoria)
                         <option {{isset($mercadoria->categoria_id) && $mercadoria->categoria_id == $categoria->id ? "selected" : ""}}
                                 value="{{$categoria->id}}">
                             {{$categoria->nome}}
                         </option>
                     @endforeach
                 </select>
                 @if ($errors->has('categoria_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('categoria_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Categoria -->
             <!-- Coleção -->
             <div class="col-lg-6">
                 <label for="colecao_id">Coleção : </label>
                 <select type="text"
                         name="colecao_id"
                         class="form-control"
                         id="colecao_id"
                 >
                     <option selected>Selecione uma Opção</option>
                     @foreach($colecoes as $colecao)
                         <option {{isset($mercadoria->colecao_id) && $mercadoria->colecao_id == $colecao->id ? "selected" : ""}}
                                 value="{{$colecao->id}}">
                             {{$colecao->nome}}
                         </option>
                     @endforeach
                 </select>
                 @if ($errors->has('colecao_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('colecao_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Coleção -->
         </div>
     </div>
     <!-- Nome e NCM -->


     <!-- Linha e marca -->
     <div class="form-group">
         <div class="row">
             <!-- Linha -->
             <div class="col-lg-6">
                 <label for="linha_id">Linha : </label>
                 <select type="text"
                         name="linha_id"
                         class="form-control"
                         id="linha_id"
                 >
                     <option selected>Selecione uma Opção</option>
                     @foreach($linhas as $linha)
                         <option {{isset($mercadoria->linha_id) && $mercadoria->linha_id == $linha->id ? "selected" : ""}}
                                 value="{{$linha->id}}">
                             {{$linha->nome}}
                         </option>
                     @endforeach
                 </select>
                 @if ($errors->has('linha_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('linha_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Linha -->
             <!-- Marca -->
             <div class="col-lg-6">
                 <label for="marca_id">Marca : </label>
                 <select type="text"
                         name="marca_id"
                         class="form-control"
                         id="marca_id"
                 >
                         <option selected>Selecione uma Opção</option>
                     @foreach($marcas as $marca)
                         <option {{isset($mercadoria->marca_id) && $mercadoria->marca_id == $marca->id ? "selected" : ""}}
                                 value="{{$marca->id}}">
                             {{$marca->nome}}
                         </option>
                     @endforeach
                 </select>
                 @if ($errors->has('marca_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('marca_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Marca -->
         </div>
     </div>

     <!-- Linha e marca -->
     <div class="form-group">
         <div class="row">
             <!-- Unidade Medida -->
             <div class="col-lg-6">
                 <label for="unidade_medida_id">Unidade Medida : </label>
                 <select type="text"
                         name="unidade_medida_id"
                         class="form-control"
                         id="unidade_medida_id"
                 >
                     <option selected>Selecione uma Opção</option>
                     @foreach($unidadesMedida as $unidadeMedida)
                         <option {{isset($mercadoria->unidade_medida_id) && $mercadoria->unidade_medida_id == $unidadeMedida->id ? "selected" : ""}}
                                 value="{{$unidadeMedida->id}}">
                             {{$unidadeMedida->legenda}}
                         </option>
                     @endforeach
                 </select>
                 @if ($errors->has('unidade_medida_id'))
                     <span class="help-block text-danger">
                        <strong>{{ $errors->first('unidade_medida_id') }}</strong>
                     </span>
                 @endif
             </div>
             <!-- Unidade Medida -->
             <!-- Unidade Caixa -->
             <div class="col-lg-6">
                     <label for="unidade_caixa_id">Unidade Caixa : </label>
                     <select type="text"
                             name="unidade_caixa_id"
                             class="form-control"
                             id="unidade_caixa_id"
                     >
                         <option selected>Selecione uma Opção</option>
                         @foreach($unidadesCaixa as $unidadeCaixa)
                             <option {{isset($mercadoria->unidade_caixa_id) && $mercadoria->unidade_caixa_id == $unidadeCaixa->id ? "selected" : ""}}
                                     value="{{$unidadeCaixa->id}}">
                                 {{$unidadeCaixa->legenda}}
                             </option>
                         @endforeach
                     </select>
                     @if ($errors->has('unidade_caixa_id'))
                         <span class="help-block text-danger">
                        <strong>{{ $errors->first('unidade_caixa_id') }}</strong>
                     </span>
                     @endif
             </div>
             <!-- Unidade Caixa -->
         </div>
     </div>
     <!-- Unidade Mediada e Unidade Caixa -->

     <!-- Observação -->
     <div class="form-group">
         <label for="observacao">Observação : </label>
         <textarea
                 name="observacao"
                 class="form-control"
                 id="observacao"
         >{{isset($mercadoria->observacao) ? $mercadoria->observacao : old('observacao')}}</textarea>
         @if ($errors->has('observacao'))
             <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
         @endif
     </div>
     <!-- Observação -->

    <!-- Fim do form -->