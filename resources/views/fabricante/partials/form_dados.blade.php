
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
                        value="{{isset($fabricante->cnpj) ? $fabricante->cnpj : old('cnpj')}}"
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
                        value="{{isset($fabricante->ie) ? $fabricante->ie : old('ie')}}"
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
         <label for="nome_fabricante">Nome : </label>
         <input type="text"
                name="nome_fabricante"
                class="form-control"
                id="nome_fabricante"
                value="{{isset($fabricante->nome) ? $fabricante->nome : old('nome_fabricante')}}"
         >
         @if ($errors->has('nome_fabricante'))
             <span class="help-block text-danger">
                    <strong>{{ $errors->first('nome_fabricante') }}</strong>
                </span>
         @endif
     </div>
     <!-- Nome -->


     <!-- Nome Fantasia -->
        <div class="form-group">
            <label for="nome_fantasia">Nome Fantasia : </label>
            <input type="text"
                   name="nome_fantasia"
                   class="form-control"
                   id="nome_fantasia"
                   value="{{isset($fabricante->nome_fantasia) ? $fabricante->nome_fantasia : old('nome_fantasia')}}"
            >
            @if ($errors->has('nome_fantasia'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('nome_fantasia') }}</strong>
                </span>
            @endif
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
                   value="{{isset($fabricante->razao_social) ? $fabricante->razao_social : old('razao_social')}}"
             >
             @if ($errors->has('razao_social'))
                 <span class="help-block text-danger">
                    <strong>{{ $errors->first('razao_social') }}</strong>
                 </span>
             @endif
            </div>
             <!-- Natureza Jurídica-->
             <div class="col-lg-6">
                <label for="natureza_juridica">Natureza Jurídica : </label>
                <select type="text"
                        name="natureza_juridica"
                        class="form-control"
                        id="natureza_juridica"
                >
                    <option {{isset($fabricante->natureza_juridica) && $fabricante->natureza_juridica == "FISICA"  ? "selected" : ""}}
                            value="FISÍCA">Fisíca</option>
                    <option {{isset($fabricante->natureza_juridica) && $fabricante->natureza_juridica == "JURÍDICA"  ? "selected" : ""}}
                            value="JURÍDICA">Jurídica</option>
                </select>
                @if ($errors->has('natureza_juridica'))
                    <span class="help-block text-danger">
                   <strong>{{ $errors->first('natureza_juridica') }}</strong>
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
        >{{isset($fabricante->observacao) ? $fabricante->observacao : old('observacao')}}</textarea>
        @if ($errors->has('observacao'))
            <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
        @endif
    </div>
    <!-- Observação -->




    <!-- Fim do form -->                                                                                                                                                                                                                                                                                                                           