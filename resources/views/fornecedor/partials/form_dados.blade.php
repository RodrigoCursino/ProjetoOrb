
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
                        value="{{isset($fornecedor->cnpj) ? $fornecedor->cnpj : old('cnpj')}}"
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
                        value="{{isset($fornecedor->ie) ? $fornecedor->ie : old('ie')}}"
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

     <!-- Nome Fantasia -->
        <div class="form-group">
            <label for="nome_fantasia">Nome Fantasia : </label>
            <input type="text"
                   name="nome_fantasia"
                   class="form-control"
                   id="nome_fantasia"
                   value="{{isset($fornecedor->nome_fantasia) ? $fornecedor->nome_fantasia : old('nome_fantasia')}}"
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
            <label for="razao_social">Razão Social : </label>
            <input type="text"
                   name="razao_social"
                   class="form-control"
                   id="razao_social"
                   value="{{isset($fornecedor->razao_social) ? $fornecedor->razao_social : old('razao_social')}}"
            >
            @if ($errors->has('razao_social'))
                <span class="help-block text-danger">
                   <strong>{{ $errors->first('razao_social') }}</strong>
                </span>
            @endif
        </div>
     <!-- Razão Social -->

    <!-- Observação -->
    <div class="form-group">
        <label for="observacao">Observação : </label>
        <textarea
               name="observacao"
               class="form-control"
               id="observacao"
        >{{isset($fornecedor->observacao) ? $fornecedor->observacao : old('observacao')}}</textarea>
        @if ($errors->has('observacao'))
            <span class="help-block text-danger">
              <strong>{{ $errors->first('observacao') }}</strong>
            </span>
        @endif
    </div>
    <!-- Observação -->


     <!-- Fornece Mercadoria -->
     <div class="form-check pull-right">
         <label>Fornece Mercadoria :</label><br>
         <label class="form-radio-label">
             <input class="form-radio-input"
                    type="radio"
                    name="forn_mercadoria"
                    value="1"
                   {{isset($fornecedor->forn_mercadoria) && $fornecedor->forn_mercadoria == "1" ? "checked" : ""}}
             >
             <span class="form-radio-sign">Sim</span>
         </label>
         <label class="form-radio-label">
             <input class="form-radio-input"
                    type="radio"
                    name="forn_mercadoria"
                    value="0"
                    {{isset($fornecedor->forn_mercadoria) && $fornecedor->forn_mercadoria == "0" ? "checked" : ""}}
             >
             <span class="form-radio-sign">Não</span>
         </label>
         <br>
         @if ($errors->has('forn_mercadoria'))
             <span class="help-block text-danger">
              <strong>{{ $errors->first('forn_mercadoria') }}</strong>
            </span>
         @endif
     </div>
     <!-- Fornece Mercadoria -->

    <!-- Fim do form -->