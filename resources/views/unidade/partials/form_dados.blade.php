
     <!-- Início do form -->
     <!-- CNPJ e IE -->
     <div class="form-group">
         <div class="row">
             <!-- CNPJ -->
             <div class="col-lg-6">
                 <label for="cnpj">CNPJ : </label>
                 <input type="text"
                        name="cnpj"
                        class="form-control"
                        id="cnpj"
                        value="{{isset($unidade->cnpj) ? $unidade->cnpj : old('cnpj')}}"
                 >
                 @if ($errors->has('cnpj'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('cnpj') }}</strong>
                </span>
                 @endif
             </div>
             <!-- CNPJ -->
             <!-- Inscrição Estadual -->
             <div class="col-lg-6">
                 <label for="ie">Inscrição Estadual : </label>
                 <input type="text"
                        name="ie"
                        class="form-control"
                        id="ie"
                        value="{{isset($unidade->ie) ? $unidade->ie : old('ie')}}"
                 >
                 @if ($errors->has('ie'))
                     <span class="help-block text-danger">
                  <strong>{{ $errors->first('ie') }}</strong>
                </span>
                 @endif
             </div>
             <!-- Inscrição Estadual -->
         </div>
     </div>
     <!-- CNPJ e IE -->


     <!-- Nome -->
     <div class="form-group">
         <div class="row">
             <div class="col-lg-12">
                 <label for="nome_unidade">Nome : </label>
                 <input type="text"
                        name="nome_unidade"
                        class="form-control"
                        id="nome_unidade"
                        value="{{isset($unidade->nome) ? $unidade->nome : old('nome_unidade')}}"
                 >
                 @if ($errors->has('nome_unidade'))
                     <span class="help-block text-danger">
                    <strong>{{ $errors->first('nome_unidade') }}</strong>
                </span>
                 @endif
             </div>
         </div>
     </div>
     <!-- Nome -->


     <!-- Nome Fantasia -->
        <div class="form-group">
           <div class="row">
               <div class="col-lg-6">
                   <label for="nome_fantasia">Nome Fantasia : </label>
                   <input type="text"
                          name="nome_fantasia"
                          class="form-control"
                          id="nome_fantasia"
                          value="{{isset($unidade->nome_fantasia) ? $unidade->nome_fantasia : old('nome_fantasia')}}"
                   >
                   @if ($errors->has('nome_fantasia'))
                       <span class="help-block text-danger">
                    <strong>{{ $errors->first('nome_fantasia') }}</strong>
                </span>
                   @endif
               </div>
               <div class="col-lg-6">
                   <!-- Centro de Custo -->
                   <div class="form-group">
                       <div class="row">
                           <!-- Centro Custo -->
                           <div class="col-lg-12">
                               <label for="centro_custo_id">Centro de Custo : </label>
                               <select type="text"
                                       name="centro_custo_id"
                                       class="form-control"
                                       id="centro_custo_id"
                               >
                                   @foreach($centrosCustos as $centroCusto)
                                       <option {{isset($unidade->centro_custo_id) && $unidade->centro_custo_id == $centroCusto->id ? "selected" : ""}}
                                               value="{{$centroCusto->id}}">{{$centroCusto->nome}}</option>
                                   @endforeach
                               </select>
                               @if ($errors->has('centro_custo_id'))
                                   <span class="help-block text-danger">
                                      <strong>{{ $errors->first('centro_custo_id') }}</strong>
                                   </span>
                               @endif
                           </div>
                       </div>
                   </div>
                   <!-- Centro de Custo -->
               </div>
           </div>
        </div>
     <!-- Nome Fantasia -->

     <!-- Razão Social -->
        <div class="form-group">
            <div class="row">
             <div class="col-lg-6" >
             <label for="razao_social">Razão Social : </label>
             <input type="text"
                   name="razao_social"
                   class="form-control"
                   id="razao_social"
                   value="{{isset($unidade->razao_social) ? $unidade->razao_social : old('razao_social')}}"
             >
             @if ($errors->has('razao_social'))
                 <span class="help-block text-danger">
                    <strong>{{ $errors->first('razao_social') }}</strong>
                 </span>
             @endif
            </div>

                    <!-- Centro Custo -->
                    <div class="col-lg-6">
                        <label for="unidade_estoque_id">Unidade de Estoque : </label>
                        <select type="text"
                                name="unidade_estoque_id"
                                class="form-control"
                                id="unidade_estoque_id"
                        >
                            <option value="0">Está unidade é um estoque</option>
                            @foreach($unidades as $und)
                                <option {{isset($unidade->unidade_estoque_id) && $unidade->unidade_estoque_id == $und->id ? "selected" : ""}}
                                        value="{{$und->id}}">{{$und->nome}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('unidade_estoque_id'))
                            <span class="help-block text-danger">
                                      <strong>{{ $errors->first('unidade_estoque_id') }}</strong>
                                   </span>
                        @endif
                    </div>

             <!-- Natureza Juridica-->
            </div>
        </div>
     <!-- Razão Social -->

    <!-- Observação -->
    <div class="form-group">
        <label for="observacao">Observação : </label>
        <textarea
               name="observacao"
               class="form-control"
               id="observacao"
        >{{isset($unidade->observacao) ? $unidade->observacao : old('observacao')}}</textarea>
        @if ($errors->has('observacao'))
            <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
        @endif
    </div>
    <!-- Observação -->

     <!-- Loja -->
     <div class="form-check pull-right">
         <label>Loja :</label><br>
         <label class="form-radio-label">
             <input class="form-radio-input"
                    type="radio"
                    name="loja"
                    value="1"
                     {{isset($unidade->loja) && $unidade->loja == "1" ? "checked" : ""}}
             >
             <span class="form-radio-sign">Sim</span>
         </label>
         <label class="form-radio-label">
             <input class="form-radio-input"
                    type="radio"
                    name="loja"
                    value="0"
                     {{isset($unidade->loja) && $unidade->loja == "0" ? "checked" : ""}}
             >
             <span class="form-radio-sign">Não</span>
         </label>
         <br>
         @if ($errors->has('loja'))
             <span class="help-block text-danger">
              <strong>{{ $errors->first('loja') }}</strong>
            </span>
         @endif
     </div>
     <!-- Loja -->





     <!-- Fim do form -->